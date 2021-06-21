<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Option;
use App\Payment;
use App\Product;
use App\Region;
use App\Status;
use App\User;
use App\Warehouses;
use Illuminate\Http\Request;
use App\Order;
use DB;
use App\City;
use Auth;
use App\Cart;
use Cache;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Session;
use App\Page;
use App\Setting;
use App\Tag;
use App\Category;
use App\Contact;
use Event;
use App\Events\AddLogs;
use App\Gallery;
use App\Manufacturer;
use Illuminate\Support\Facades\Mail;
use App\Settings;

class OrderController extends Controller {

    public function index(){

        $translate = [
            'checkout' => Lang::trans('order.checkout'),
            'contacts' => Lang::trans('order.contacts'),
            'name' => Lang::trans('order.name'),
            'surname' => Lang::trans('order.surname'),
            'carrier' => Lang::trans('order.carrier'),
            'pickup' => Lang::trans('order.pickup'),
            'city' => Lang::trans('order.city'),
            'comment' => Lang::trans('order.comment'),
            'send' => Lang::trans('order.send'),
            'address' => Lang::trans('order.address'),
            'address_pickup' => Lang::trans('order.address_pickup'),
            'and' => Lang::trans('order.and'),
            'products' => Lang::trans('order.products'),
            'total' => Lang::trans('order.total'),
            'warehouses' => Lang::trans('order.warehouses'),

        ];
        $locale = Lang::getLocale();
        $regions = Region::all();
        $settings = Setting::first();
        $cities = City::where('area', '71508131-9b87-11de-822f-000c2965ae0e')->get();
        $warehouses = Warehouses::where('city_ref', '8d5a980d-391c-11dd-90d9-001a92567626')->get();

        return view('site.order', compact('regions', 'settings', 'translate', 'locale', 'cities', 'warehouses'));

    }

	public function indexAdmin( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		// $orders = Order::where('confirm', 1)->orderBy( 'created_at', 'desc' )->get();

		$orders = Order::all();
		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.order.index', compact( 'orders', 'order_count', 'contacts_count' ));
	}

	//добавление товара в корзину
	public function getAddToCart( Request $request, $id ) {
		$product = Product::find( $id );
		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );
		$cart->add( $product, $product->id );

		$request->session()->put( 'cart', $cart );
		$data = [
			'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
			'info_messages' => 'Товар добавлен в Корзину!'
		];

		return $data;
	}

	public function abandonedCart(Request $request){
        $request->user()->authorizeRoles( [ 'admin' ] );

        // $orders = Order::where('confirm', 0)->orderBy( 'created_at', 'desc' )->get();
        $orders = Order::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.order.abandoned', compact('orders', 'contacts_count', 'order_count'));
    }

	//увеличение количества
	public function getAddByOneCardProduct( $id ) {

		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );

		if ( $cart->items ) {
			// проверяем, присутствует ли в массиве указанный ключ или индекс
			if ( array_key_exists( $id, $cart->items ) ) {
				$cart->addByOne( $id );
				//обновляем количество
				Session::put( 'cart', $cart );
				$data = [
					'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
					'info_messages' => 'Количество увеличено!'
				];

				return $data;
			}
		} else {
			//обновляем количество
			Session::put( 'cart', $cart );
			$data = [
				'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
				'info_messages' => 'Добавьте товар в корзину!'
			];

			return $data;
		}
		//если корзина пустая, ничего не делаем
		$data = [
			'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
			'info_messages' => 'Добавьте товар в корзину!'
		];

		return $data;
	}

	//уменьшение количества //работает правильно
	public function getReduceByOneCardProduct( $id ) {

		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );

		if ( $cart->items ) {
			// проверяем, присутствует ли в массиве указанный ключ или индекс
			if ( array_key_exists( $id, $cart->items ) ) {
				$cart->reduceByOne( $id );
				if ( count( $cart->items ) > 0 ) {
					//обновляем количество
					Session::put( 'cart', $cart );
					$data = [
						'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
						'info_messages' => 'Количество уменьшено!'
					];

					return $data;
				} else {
					//удаляем товар
					Session::forget( 'cart' );
					//обновляем количество
					Session::put( 'cart', $cart );
					$data = [
						'qty_product'   => 0,
						'info_messages' => 'Корзина пуста!'
					];

					return $data;
				}
			}
		}
		//если корзина пустая, ничего не делаем
		$data = [
			'qty_product'   => Session::get( 'cart' )->totalQty ?? 0,
			'info_messages' => 'Добавьте товар в корзину!'
		];

		return $data;
	}

	public function getCart() {
		$page = Page::where( 'type', 'shopping-cart' )->first();
		pagetitle( $page->meta_h1 );
        $settings = Setting::first();

		if ( ! Session::has( 'cart' ) ) {
			return view( 'site.shopping-cart', compact( 'page', 'settings' ) );
		}
		$oldCart = Session::get( 'cart' );
		$cart    = new Cart( $oldCart );


		return view( 'site.shopping-cart', [
			'products'   => $cart->items,
			'totalPrice' => $cart->totalPrice,
			'page'       => $page,
            'settings' => $settings
		] );
	}

    public function getBasket() {
        $translate = [
            'basket' => Lang::trans('site.basket'),
        ];
        $page = Page::where( 'type', 'shopping-cart' )->first();
        pagetitle( $page->meta_h1 );
        $settings = Setting::first();
        $locale = App::getLocale();

        if ( ! Session::has( 'cart' ) ) {
            return view( 'site.basket', compact( 'page', 'settings', 'locale', 'translate' ) );
        }
        $oldCart = Session::get( 'cart' );
        $cart    = new Cart( $oldCart );


        return view( 'site.basket', [
            'products'   => $cart->items,
            'totalPrice' => $cart->totalPrice,
            'page'       => $page,
            'settings' => $settings,
            'locale' => $locale,
            'translate' => $translate,
        ] );
    }

	//удаление одного товара из корзины
	public function getReduceByOne( $id ) {
		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );
		$cart->reduceByOne( $id );

		if ( count( $cart->items ) > 0 ) {
			//обновляем количество
			Session::put( 'cart', $cart );
		} else {
			//удаляем товар
			Session::forget( 'cart' );
		}

		return redirect()->route( 'shopping-cart' );
	}

	//добавление одного товара из корзины
	public function getAddByOne( $id ) {
		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );
		$cart->addByOne( $id );
		//обновляем количество
		Session::put( 'cart', $cart );

		return redirect()->route( 'shopping-cart' );
	}

	//удаление товара из корзины
	public function getRemoveItem( $id ) {
		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		$cart    = new Cart( $oldCart );
		$cart->removeItem( $id );

		//чистим корзину
		if ( count( $cart->items ) > 0 ) {
			Session::put( 'cart', $cart );
		} else {
			Session::forget( 'cart' );
		}

		return redirect()->route( 'shopping-cart' );
	}

	public function getCheckout() {
		$page = Page::where( 'type', 'order-index' )->first();
		pagetitle( $page->meta_h1 );

		if ( ! Session::has( 'cart' ) ) {
			$total = 0;

			return view( 'site.checkout', compact( 'page', 'total' ) );
		}
		$oldCart = Session::get( 'cart' );
		$cart    = new Cart( $oldCart );
		$total   = $cart->totalPrice;

		$payments = Payment::all();

		return view( 'site.checkout', compact( 'total', 'page', 'payments' ) );
	}

	//оформление заказа
	public function postCheckout( Request $request ) {

		if ( ! Session::has( 'cart' ) ) {
			return view( 'site.checkout', compact( 'pages' ) );
		}
		$oldCart = Session::get( 'cart' );
		$cart    = new Cart( $oldCart );

		/*LiqPay*/
		$this->validate( $request, [
			'city'        => 'required|max:255',
			'payment_id'  => 'required|max:255',
			'delivery_id' => 'required|max:255',
			'stock'       => 'required|max:255',
		] );

		/*создаем заказ*/
		$user               = Auth::id();
		$order              = new Order();
		$order->cart        = serialize( $cart );
		$order->user_id     = $user;
		$order->type        = 'checkout';
		$order->name        = $request->name;
		// $order->surname		= $request->surname;
		$order->status_id   = 1;
		$order->phone       = $request->phone;
		$order->email       = $request->email;
		$order->stock       = $request->stock;
		$order->city        = $request->city;
		$order->delivery_id = $request->delivery_id;
		$order->payment_id  = $request->payment_id;
		$order->save();

		if ( Auth::check() ) {
			//запись в таблицу коментариев
			Comment::create( [
				'order_id'  => $order->id,
				'com_text'  => $request->com_text,
				'status_id' => 1,
				'user_id'   => Auth::id(),
				'name'      => Auth::user()->name,
				'email'     => Auth::user()->email,
			] );
		}

		//чистим сессию
		Session::forget( 'cart' );

		if ( $request->email ) {
			//отправка письма Клиенту
			$mail_order = $order->email;
			Mail::send( 'emails.user.create_order', [ 'order' => $order ],
				function ( $message ) use ( $mail_order ) {
					$setting = Setting::find( 1 );
					$message->from( $setting->email_site, 'Магазин SHOP!' );
					$message->to( $mail_order )
					        ->subject( 'Спасибо за покупку в нашем магазине!' );
				} );
		}

		//отправка письма Админу
		Mail::send( 'emails.admin.create_order', [ 'order' => $order ],
			function ( $message ) {
				$setting = Setting::find( 1 );
				$message->from( $setting->email_site, 'Магазин SHOP!' );
				$message->to( $setting->email_site )
				        ->subject( 'Новый заказ с сайта!' );
			} );

		return redirect()
			->route( 'checkout' )
			->withErrors( 'Заказ принят в обработку!' );
	}

	public function orderQuick( Request $request, $id ) {
		$product = Product::find( $id );
		$oldCart = Session::has( 'cart' ) ? Session::get( 'cart' ) : NULL;
		//чистим сессию
		Session::forget( 'cart' );

		$cart = new Cart( $product );
		$cart->add( $product, $product->id );
		$request->session()->put( 'cart', $cart );

		$this->validate( $request, [
			'name'  => 'required|max:255',
			'phone' => 'required|max:255',
		] );
		$order       = new Order();
		$order->cart = serialize( $cart );
		if ( Auth::check() ) {
			$user_id        = Auth::user()->id;
			$order->user_id = $user_id;
		}
		$order->status_id = 1;
		$order->type      = 'one_click';
		$order->name      = $request->name;
		$order->phone     = $request->phone;
		$order->save();

		//чистим посредн. сессию
		Session::forget( 'cart' );

		//возвращаем корзину
		Session::put( 'cart', $oldCart );

		//отправка письма Админу
		Mail::send( 'emails.admin.create_order', [ 'order' => $order ],
			function ( $message ) {
				$setting = Setting::find( 1 );
				$message->from( $setting->email_site, 'Магазин SHOP!' );
				$message->to( $setting->email_site )
				        ->subject( 'Новый заказ с сайта!' );
			} );

		return redirect()->back()->withErrors( 'Заказ принят в обработку!' );
	}

	public function create( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );
		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();
        $statuses = Status::where('public', 1)->get();
        $regions = Region::all();

        $users = Order::where('confirm', 1)->get()->pluck('name');

		$products = Product::all();
		$users    = User::all();
		$orders   = Order::all();
		$cities   = City::all();
		$warehouses = Warehouses::all();

		return view( 'admin.order.create', compact( 'warehouses', 'orders', 'users', 'products', 'regions', 'statuses', 'cities', 'order_count', 'contacts_count' ) );
	}

	public function store( Request $request ) {
		$products = Product::find( $request->product );
		$cart     = new Cart( $products );

		$order              = new Order();
		$order->cart        = serialize( $cart );
		$order->user_id     = $request->user_id;
		$order->status_id   = 1;
		$order->type        = 'system';
		$order->name        = $request->name;
		$order->surname		= $request->surname;
		$order->phone       = $request->phone;
		$order->email       = $request->email;
		$order->stock       = $request->stock;
		$order->city        = $request->city;
		$order->delivery_id = $request->delivery_id;
		$order->payment_id  = $request->payment_id;

		$order->save();

		return back()
			->withInput()
			->withErrors( array( 'info_messages' => 'Создан!' ) );
	}

	public function edit( Request $request, $id ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );
		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();
		$statuses = Status::where('public', 1)->get();
		$order = Order::find($id);
		$order->save();
		if($order->delivery == 'carrier'){
            $regions = Region::all();
            $cities = City::where('area', $order->region)->get();
            $warehouses = Warehouses::where('city_ref', $order->city)->get();
        }else{
            $regions = Region::all();
            $cities = [];
            $warehouses = [];
        }

		$prod = json_decode($order->products, true);
		$products = [];

		for($i = 0;$i < count($prod);$i++){
		    $product = Product::find($prod[$i]['product']);

            $options = Option::with('values')->get();

            $selected_product_values = $product->productValues()->get();
            $selected_values = null;

            $selected_product_values->load(['valueOption' => function ($items) use (&$selected_values) {
                $selected_values = $items->get();
            }]);
            $selected = [];
            $select_options = null;
            if ($selected_values != null) {
                $selected_values->load(['select_options' => function ($items) use (&$select_options) {
                    $select_options = $items->get();
                }]);


                if ($select_options != null) {

                    for ($so = 0; $so < count($select_options); $so++) {
                        $selected[$so]['option'] = $select_options[$so];
                        for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                            for ($o = 0; $o < count($options); $o++) {
                                for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                    if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                        $selected[$so]['values'][] = $options[$o]->values;

                                        if(array_key_exists($selected[$so]['values'][0][0]['option_id'], $prod[$i]['selected_options'])){
                                            $selected[$so]['select'] = $prod[$i]['selected_options'][$selected[$so]['values'][0][0]['option_id']];
                                        }else{
                                            $selected[$so]['select'] = null;
                                        }
                                        $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                    }
                                }
                            }
                        }

                    }
                }
            }
            $product->quantity = $prod[$i]['count'];
            $product->options = $selected;
            $product->currentPrice = $prod[$i]['currentPrice'];
            if(isset($prod[$i]['selected_options'])){
                $product->selected_options = $prod[$i]['selected_options'];
            }

            $products[] = $product;
        }

		/*$order       = Order::find( $id );
		$statuses    = Status::get()->pluck( 'title', 'id' );
		$cities      = City::get()->pluck( 'title', 'id' );
		$payments    = Payment::get()->pluck( 'title', 'id' );
		$order->cart = unserialize( $order->cart );

		return view( 'admin.order.edit', compact( 'order', 'statuses', 'cities', 'payments' ) );
	}

	public function update( Request $request, $id ) {
		$this->validate( $request, [
			'city'        => 'required|max:255',
			'payment_id'  => 'required|max:255',
			'delivery_id' => 'required|max:255',
			'stock'       => 'required|max:255',
		] );
		$order = Order::find( $id );
		if ( $request->city ) {
			$order->city = $request->city;
		}
		if ( $request->status_id ) {
			$order->status_id = $request->status_id;
		}
		if ( $request->payment_id ) {
			$order->payment_id = $request->payment_id;
		}
		if ( $request->delivery_id ) {
			$order->delivery_id = $request->delivery_id;
		}
		if ( $request->stock ) {
			$order->stock = $request->stock;
		}
		if ( $request->email ) {
			$order->email = $request->email;
		}
		$order->save();

		if ( $request->status_id ) {
			//запись в таблицу коментариев
			Comment::create( [
				'order_id'  => $order->id,
				'com_text'  => $request->com_text,
				'user_id'   => Auth::id(),
				'name'      => Auth::user()->name,
				'email'     => Auth::user()->email,
				'status_id' => $request->status_id,
			] );
		}*/

		/*return back()
			->withInput()
			->withErrors( array( 'info_messages' => 'Обновлен!' ) );*/
		return view('admin.order.edit', compact('order', 'products', 'regions', 'cities', 'warehouses', 'statuses', 'order_count', 'contacts_count'));
	}

	public function destroy( $id ) {
		DB::table( "orders" )->where( 'id', $id )->delete();

		return back()->withMessage( 'Order Delete' );
	}

}
