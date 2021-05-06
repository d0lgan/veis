<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Contact;
use App\GroupAttribute;
use App\Http\Middleware\LocaleMiddleware;
use App\Order;
use App\Brand;
use App\Category;
use App\Document;
use App\Language;
use App\Manufacturer;
use App\Option;
use App\Setting;
use App\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Page;
use DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Session;
use App\Product;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use function foo\func;

class PageController extends Controller {

    /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexAdmin( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$pages = Page::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

		return view( 'admin.page.index', compact( 'pages', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Request $request, $id ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );
		$langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

		$page = Page::find( $id );
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('page', 'title', $page->id, $lang->locate_code),
                'description' => Document::get('page', 'description', $page->id, $lang->locate_code),
                'meta' => Document::get('page', 'meta', $page->id, $lang->locate_code),
                'seo' => Document::get('page', 'seo', $page->id, $lang->locate_code),
            ];
        // print_r(Document::get('page', 'description', $page->id, $lang->locate_code)); exit;
        }
        $page->data = $arr;


		return view( 'admin.page.edit', compact( 'page', 'langs', 'contacts_count', 'order_count' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, $id ) {
//	    dd($request);
		$page              = Page::find( $id );
		$page->title       = $request->title_ru;
		$page->meta_h1     = $request->meta_ru;
		$page->type        = $request->type;
        $page->slug        = $request->slug;
		$page->seo         = $request->seo_ru;
		$page->description = $request->description_ru;
		$page->public      = $request->public;
		//создаем изображение
		if ( $request->image ) {
			$destinationPath = public_path() . '/house/uploads/';
			$image_name      = $_FILES['image']['name'];
			Image::make( $request->image )
			     ->heighten( 450, function ( $constraint ) {
				     $constraint->upsize();
			     } )
			     ->save( $destinationPath . $image_name );
			$page->image = $image_name;
		} else {
			$page->image = $page->image;
		}
		$page->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'page',
                        'module_id' => $page->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

		/*return back()
			->withInput()
			->withErrors( array( 'info_messages' => 'Обновлен!' ) );*/
		return redirect()->route('admin-pages-index');
	}

	//page site
	public function about() {

		$page = Page::where( 'type', 'about' )->first();
		pagetitle( $page->meta_h1 );

		return view( 'site.about', compact( 'page' ) );
	}

	public function service() {

		$page = Page::where( 'type', 'service' )->first();
		pagetitle( $page->meta_h1 );

		return view( 'site.service', compact( 'page' ) );
	}

	public function favorites() {
		$page = Page::where( 'type', 'favorites' )->first();

		//масив данных
		$products = Session::get( 'favorites' ) ?: [];
		if ( $products ) {
			$products = Product::whereIn( 'id', $products )->paginate( 10 );
		} else {
			$product = new Product();
		}

		return view( 'site.favorites', compact( 'page', 'products', 'product' ) );
	}

    public function home() {
	    $translate = [
            'new' => Lang::trans('site.productCard.new'),
            'sale' => Lang::trans('site.productCard.sale'),
            'gloves' => Lang::trans('site.productCard.gloves'),
            'sunglasses' => Lang::trans('site.productCard.sunglasses'),
            'umbrellas' => Lang::trans('site.productCard.umbrellas'),
            'bags' => Lang::trans('site.productCard.bags'),
            'watch' => Lang::trans('site.productCard.watch'),
            'buy' => Lang::trans('site.productCard.buy'),
            'price' => Lang::trans('site.productCard.price'),
            'color' => Lang::trans('site.productCard.color'),
            'show_all' => Lang::trans('site.productCard.show_all'),
        ];
        $latestGlasses = Product::orderBy('created_at', 'desc')
            ->where('title_ru', 'like', '%очки%')
            ->take(8)
            ->with('galleries', 'attributes', 'tags')
            ->get();
        foreach ($latestGlasses as $i => $item) {
            $latestGlasses[$i] = $item->toArray();
        }

        $locale = App::getLocale();
	    return view('site.home', compact('latestGlasses', 'locale', 'translate'));
    }

    public function catalog() {
	    /*$ps = Product::where('id', '>', 100)->take(10)->get();
	    foreach ($ps as $p) {
	        foreach($p->attributes()->get() as $atr) {
	            if ($atr->id == 61) {
	                dump($p, $p->attributes()->get());
                }
            };
        }
	    dd();*/

	    /*$genders = [60];
        $ps = Product::whereHas('attributes', function($q) use ($genders) {
                $q->whereIn('attributes.id', $genders);
            })->get();
        dd($ps);*/
        $translate = [
            'catalog' => Lang::trans('site.footer.catalog'),
            'store' => Lang::trans('product.store'),

            'new' => Lang::trans('site.productCard.new'),
            'sale' => Lang::trans('site.productCard.sale'),
            'gloves' => Lang::trans('site.productCard.gloves'),
            'sunglasses' => Lang::trans('site.productCard.sunglasses'),
            'umbrellas' => Lang::trans('site.productCard.umbrellas'),
            'bags' => Lang::trans('site.productCard.bags'),
            'watch' => Lang::trans('site.productCard.watch'),
            'buy' => Lang::trans('site.productCard.buy'),
            'price' => Lang::trans('site.productCard.price'),
            'color' => Lang::trans('site.productCard.color'),
            'show_all' => Lang::trans('site.productCard.show_all'),

            'filter' => Lang::trans('site.catalog.filter'),
            'sort' => Lang::trans('site.catalog.sort'),
            'newest' => Lang::trans('site.catalog.newest'),
            'price_asc' => Lang::trans('site.catalog.price_asc'),
            'price_desc' => Lang::trans('site.catalog.price_desc'),
            'for' => Lang::trans('site.catalog.for'),
            'manuf' => Lang::trans('site.catalog.manuf'),
            'shape' => Lang::trans('site.catalog.shape'),
            'uv_filter' => Lang::trans('site.catalog.uv_filter'),
            'lensColor' => Lang::trans('site.catalog.lensColor'),
            'frameColor' => Lang::trans('site.catalog.frameColor'),
            'gradient' => Lang::trans('site.catalog.gradient'),
            'frameMaterial' => Lang::trans('site.catalog.frameMaterial'),
            'features' => Lang::trans('site.catalog.features'),
            'tags' => Lang::trans('site.catalog.tags'),
            'priceUp' => Lang::trans('site.catalog.priceUp'),
            'use_filter' => Lang::trans('site.catalog.use_filter'),
            'reset' => Lang::trans('site.catalog.reset'),
            'next' => Lang::trans('site.catalog.next'),
            'prev' => Lang::trans('site.catalog.prev'),
            'glasses' => Lang::trans('site.products.glasses'),
            'portfolios' => Lang::trans('site.products.portfolios'),
            'wallets' => Lang::trans('site.products.wallets'),
            'is_sale' => Lang::trans('site.catalog.is_sale'),
            'category' => Lang::trans('site.catalog.category'),
        ];
        $locale = App::getLocale();

        $filters = GroupAttribute::where('public', 1)->with(['attributes' => function ($query) {
            $query->withCount('products');
        }])->get()->map->toArray()->sortBy('sort')->toArray();




        foreach ($filters as $key => $group) {
            // Добавление продуктов с атрибута Унисекс в атрибуты Мужские и Женские (костыль)
            if ($group['id'] == 14) {
                $filters[$key]['attributes'][0]['products_count'] += $filters[$key]['attributes'][2]['products_count'];
                $filters[$key]['attributes'][1]['products_count'] += $filters[$key]['attributes'][2]['products_count'];
                unset($filters[$key]['attributes'][2]);
            }
        }

        $colorsOfLens = collect($filters)->filter(function($value, $key) {
            return $value['title_ru'] === 'Цвет линз';
        })->all();


        // Объединение цветов линз
        $firstElement = true;
        foreach ($filters as $key => $group) {
            if ($group['title_ru'] != 'Цвет линз') continue;

            if($firstElement) {
                $firstElement = false;
                $firstElementId = $key;
            } else {
                foreach ($group['attributes'] as $attribute) {
                    $isColorInMainGroup = false;
                    foreach ($filters[$firstElementId]['attributes'] as $indexOfMainAttr => $mainAttribute) {
                        if ($attribute['name_ru'] == $mainAttribute['name_ru']) {
                            $isColorInMainGroup = true;
                            $filters[$firstElementId]['attributes'][$indexOfMainAttr]['products_count'] += $attribute['products_count'];
                        }
                    }

                    if (!$isColorInMainGroup) {
                        array_push($filters[$firstElementId]['attributes'], $attribute);
                    }
                }

                unset($filters[$key]);
            }

        }

        // Сортировка атрибутов группы атрибутов по количеству привязанных продуктов
        $filters = array_values(collect($filters)->map(function ($item) {
            $item['attributes'] = array_values(collect($item['attributes'])->sortByDesc('products_count')->toArray());
            return $item;
        })->toArray());


        return view('site.catalog', compact('translate', 'locale', 'filters'));
    }

    public function info() {
	    return view('site.info');
    }
}
