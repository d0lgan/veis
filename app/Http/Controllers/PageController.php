<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Blog;
use App\BlogCategory;
use App\CatalogDropDown;
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
use App\Redirect;
use App\Setting;
use App\Slider;
use App\Stock;
use App\Tag;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Page;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Product;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use function foo\func;

class PageController extends Controller {

    public function mail( Request $request ) {
        $order = Order::first();

        if ( $request->email ) {
            //отправка письма Клиенту
            $mail_order = $order->email;
            Mail::send( 'emails.user.create_order', [ 'order' => $order ],
                function ( $message ) use ( $mail_order ) {
                    $setting = Setting::find( 1 );
                    $message->from( $setting->send_eamil, 'Магазин Veis!' );
                    $message->to( $mail_order )
                        ->subject( 'Спасибо за покупку в нашем магазине!' );
                } );
        }

        //отправка письма Админу
        Mail::send( 'emails.admin.create_order', [ 'order' => $order ],
            function ( $message ) {
                $setting = Setting::find( 1 );
                $message->from($setting->send_eamil, 'Магазин Veis!' );
                $message->to($setting->receive_email)
                    ->subject( 'Новый заказ с сайта!' );
            } );
        return ;
    }

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
		$page->title_ru    = $request->title_ru;
		$page->title_uk    = $request->title_uk;
		$page->meta_h1_ru  = $request->meta_ru;
		$page->meta_h1_uk  = $request->meta_uk;
		$page->type        = $request->type;
        $page->slug        = $request->slug;
		$page->seo_ru      = $request->seo_ru;
		$page->seo_uk      = $request->seo_uk;
		$page->description_ru = $request->description_ru;
		$page->description_uk = $request->description_uk;
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
        $page = Page::where( 'type', 'home' )->first();
        $desctran = [
            'desc' => Lang::trans('site.pre-footer.desc'),
            'veis' => Lang::trans('site.pre-footer.veis'),
        ];

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
            'no_availability' => Lang::trans('product.no_availability'),
            'to_cart' => Lang::trans('product.to_cart'),
        ];

	    $leftStock = Stock::where('side', 'left')->orderBy('created_at', 'desc')->first();
	    $rightStock = Stock::where('side', 'right')->orderBy('created_at', 'desc')->first();

        $dropdowns = CatalogDropDown::where('at_home', 1)->where('category_id', '<>', null)->orderBy('sort')->get();

        $dropdowns->map(function ($dropdown) use ($leftStock, $rightStock) {
            $dropdown['products'] = [];

            $instantCategory = Category::where('id', $dropdown->category_id)->firstOrFail();
            $allCategories = Category::where('parent_id', $instantCategory->id)->get();
            foreach ($allCategories as $cat) {
                $cats = Category::where('parent_id', $cat->id)->get();
                if ($cats->count()) {
                    $allCategories = $allCategories->merge($cats);
                }
            }

            $allCategories = $allCategories->push($instantCategory);

            $allCategories = $allCategories->pluck('id');


            $prods = Product::where(function ($subQuery) use ($allCategories) {
                    $subQuery->whereIn('category_id', $allCategories)->orWhere(function ($que) use ($allCategories) {
                        $que->whereHas('categories', function ($q) use ($allCategories) {
                            $q->whereIn('categories.id', $allCategories);
                        });
                    });
                })
                ->where('image', '<>', null)->where('price', '<>', 0)
                ->with('galleries', 'attributes', 'tags', 'stock')
                ->orderBy('created_at', 'desc')->get();

            $dropdown['products'] += ['left' => array_values($prods
                ->where('stock_id', $leftStock->id)
                ->take(10)
                ->toArray())];

            $dropdown['products'] += ['right' => array_values($prods
                ->where('stock_id', $rightStock->id)
                ->take(10)
                ->toArray())];
        });

        $brands = Brand::orderBy('sort')->get();

        $mainCats = Category::where('at_home', '1')->orderBy('sort', 'asc')->get();

        $locale = App::getLocale();

        $desc = [
            'ru' => $page->description_ru,
            'uk' => $page->description_uk,
        ];

        /*$settings = Setting::first()->toArray();
        if ($locale == 'uk') {
            $settings['address_site'] = $settings['address_site_uk'];
            $settings['name_company'] = $settings['name_company_uk'];
            $settings['country'] = $settings['country_uk'];
        } else {
            $settings['address_site'] = $settings['address_site_ru'];
            $settings['name_company'] = $settings['name_company_ru'];
            $settings['country'] = $settings['country_ru'];
        }*/

	    return view('site.home', compact('dropdowns', 'leftStock', 'rightStock', 'locale', 'mainCats', 'translate', 'brands', 'page', 'desctran', 'desc'));
    }

    public function catalog(Request $request, $categorySlug = null) {
        switch (\Request::route()->getName()) {
            case 'catalog':
                $page = Page::where('type', 'catalog' )->first();
                break;
            case 'category':
                $page = Page::where('type', 'category' )->first();
                break;
            case 'manufacturer':
                $page = Page::where('type', 'manufacturer')->first();
                break;
            case 'tag':
                $page = Page::where('type', 'tag')->first();
                break;
            case 'city':
                $page = Page::where('type', 'city')->first();
                break;
        }

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
            'to_cart' => Lang::trans('product.to_cart'),
            'no_availability' => Lang::trans('product.no_availability'),
            'filter' => Lang::trans('site.catalog.filter'),
            'sort' => Lang::trans('site.catalog.sort'),
            'cancel' => Lang::trans('site.catalog.cancel'),
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
            'show_more' => Lang::trans('site.catalog.show_more'),
            'in_this_cat' => Lang::trans('site.catalog.in_this_cat'),
            'all1' => Lang::trans('site.catalog.all1'),
            'all2' => Lang::trans('site.catalog.all2'),
        ];

        $desctran = [
            'desc' => Lang::trans('site.pre-footer.desc'),
            'veis' => Lang::trans('site.pre-footer.veis'),
        ];

        $locale = App::getLocale();

        // Если это Страница Категории

        $instantCategory = null;
        $childCategories = null;
        if (\Request::route()->getName() == 'category') {
            if ($categorySlug) {
                if ($locale == 'ru') {
                    // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
                    $category = Category::where('slug_uk', $categorySlug)->first();
                    if ($category) {
                        return redirect('/ru/category/' . $category->slug_ru);
                    }
                } else if ($locale == 'uk') {
                    //
                    $category = Category::where('slug_ru', $categorySlug)->first();
                    if ($category) {
                        return redirect('/category/' . $category->slug_uk);
                    }
                }
            }
            // Проверка на категорию
            if ($categorySlug) {
                $instantCategory = Category::where('slug_ru', $categorySlug)->orWhere('slug_uk', $categorySlug)->with('attributes')->firstOrFail();
            }
            // Дочерние категории
            if ($instantCategory) {
                $childCategories = Category::where('parent_id', $instantCategory->id)->get();
                foreach ($childCategories as $childCategory) {
                    $cats = Category::where('parent_id', $childCategory->id)->get();
                    if ($cats->count()) {
                        $childCategories = $childCategories->merge($cats);
                    }
                }
                $childCategories = $childCategories->pluck('id');
            }
        }

        // Если это Страница Производителя
        $instantManufacturer = null;
        if (\Request::route()->getName() == 'manufacturer') {
            /*if ($categorySlug) {
                if ($locale == 'ru') {
                    // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
                    $manufacturer = Manufacturer::where('slug_uk', $categorySlug)->first();
                    if ($manufacturer) {
                        return redirect('/ru/manufacturer/' . $manufacturer->slug_ru);
                    }
                } else if ($locale == 'uk') {
                    //
                    $manufacturer = Manufacturer::where('slug_ru', $categorySlug)->first();
                    if ($manufacturer) {
                        return redirect('/manufacturer/' . $manufacturer->slug_uk);
                    }
                }
            }*/
            if ($categorySlug) {
                $instantManufacturer = Manufacturer::where('slug_ru', $categorySlug)->orWhere('slug_uk', $categorySlug)->firstOrFail();
            }
        }

        // Eсли это страница тега
        $instantTag = null;
        if (\Request::route()->getName() == 'tag') {
            /*if ($categorySlug) {
                if ($locale == 'ru') {
                    // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
                    $tag = Tag::where('slug_uk', $categorySlug)->first();
                    if ($tag) {
                        return redirect('/ru/tag/' . $tag->slug_ru);
                    }
                } else if ($locale == 'uk') {
                    //
                    $tag = Tag::where('slug_ru', $categorySlug)->first();
                    if ($tag) {
                        return redirect('/tag/' . $tag->slug_uk);
                    }
                }
            }*/
            if ($categorySlug) {
                $instantTag = Tag::where('slug_ru', $categorySlug)->orWhere('slug_uk', $categorySlug)->firstOrFail();
            }
        }

        // Страница Редиректа
        $instantRedirect = null;
        if (\Request::route()->getName() == 'city') {
            if ($categorySlug) {
                if ($locale == 'ru') {
                    // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
                    $tag = Redirect::where('slug_uk', $categorySlug)->first();
                    if ($tag) {
                        return redirect('/ru/city/' . $tag->slug_ru);
                    }
                } else if ($locale == 'uk') {
                    //
                    $tag = Redirect::where('slug_ru', $categorySlug)->first();
                    if ($tag) {
                        return redirect('/city/' . $tag->slug_uk);
                    }
                }
            }
            if ($categorySlug) {
                $instantRedirect = Redirect::where('slug_ru', $categorySlug)->orWhere('slug_uk', $categorySlug)->with('attributes')->firstOrFail();
                // Проверка на категорию
                if ($instantRedirect->category_id) {
                    $instantCategory = Category::where('id', $instantRedirect->category_id)->with('attributes')->firstOrFail();
                }
                // Дочерние категории
                if ($instantCategory) {
                    $childCategories = Category::where('parent_id', $instantCategory->id)->get();
                    foreach ($childCategories as $childCategory) {
                        $cats = Category::where('parent_id', $childCategory->id)->get();
                        if ($cats->count()) {
                            $childCategories = $childCategories->merge($cats);
                        }
                    }
                    $childCategories = $childCategories->pluck('id');
                }
            }
        }


        $filters = GroupAttribute::where('public', 1)->with(['attributes' => function ($query) use ($instantCategory, $childCategories, $instantManufacturer) {
            $query->withCount(['products' => function ($q) use ($instantCategory, $childCategories, $instantManufacturer) {
                if ($instantCategory) {
                    $allCats = $childCategories->push($instantCategory->id);

                    $q->where(function ($query) use ($allCats) {
                        $query->whereIn('category_id', $allCats)->orWhere(function ($que) use ($allCats) {
                            $que->whereHas('categories', function ($q) use ($allCats) {
                                $q->whereIn('categories.id', $allCats);
                            });
                        });
                    });
                } else if ($instantManufacturer) {
                    $q->where('manufacturer_id', $instantManufacturer->id);
                }

                $q->where('price', '<>', 0);
            }]);
        }])->get()->map->toArray()->sortBy('sort')->toArray();


//        dd($filters);
        foreach ($filters as $key => $group) {
            // Добавление продуктов с атрибута Унисекс в атрибуты Мужские и Женские (костыль)
            if ($group['id'] == 14) {
                $filters[$key]['attributes'][0]['products_count'] += $filters[$key]['attributes'][2]['products_count'];
                $filters[$key]['attributes'][1]['products_count'] += $filters[$key]['attributes'][2]['products_count'];
                unset($filters[$key]['attributes'][2]);
            }

            if ($group['id'] == 19) {
                $attrs = collect($group['attributes']);

                $attrs = $attrs->groupBy(function ($item, $key) {
                    return explode(' ',trim($item['name_ru']))[0];
                });

                /*foreach ($attrs as $attr) {
                    $unAttrs = [];
                    $firstWord = explode(' ',trim($attr['name_ru']))[0];
                    dump(array_key_exists($firstWord, $unAttrs), $firstWord, $unAttrs);
                    if (!array_key_exists($firstWord, $unAttrs)) {
                        $unAttrs[$firstWord] = $attr;
                    } else {

                    }
                }*/


                $uniqueAttrs = $attrs->flatMap(function ($values) use ($filters, $key) {
                    if (count($values) > 1) {
                        $q = $values->sum('products_count');

                        $values = $values->map(function ($value, $key) use ($q) {
                            if ($key == 0) {
                                $value['products_count'] = $q;
                                return $value;
                            } else {
                                return null;
                            }
                        });

                        foreach ($values as $key => $value) {
                            if ($value == null) {
                                unset($values[$key]);
                            }
                        }
                    }
                    return $values;
                });

                $filters[$key]['attributes'] = $uniqueAttrs->toArray();
            }
        }

        // Если заранее выбран атрибут женские то в поле "Для кого" не отображается select "мужские" и наоборот
        if ($instantCategory) {
            if (!$instantCategory->attributes->where('id', 61)->isEmpty()) {
                foreach ($filters as $key => $filter) {
                    if ($filter['id'] == 14) {
                        if ($filter['attributes']) {
                            foreach ($filter['attributes'] as $k => $attribute) {
                                if ($attribute['id'] == 60) {
                                    unset($filters[$key]['attributes'][$k]);
                                }
                            }
                        }
                    }
                }
            } else if (!$instantCategory->attributes->where('id', 60)->isEmpty()) {
                foreach ($filters as $key => $filter) {
                    if ($filter['id'] == 14) {
                        if ($filter['attributes']) {
                            foreach ($filter['attributes'] as $k => $attribute) {
                                if ($attribute['id'] == 61) {
                                    unset($filters[$key]['attributes'][$k]);
                                }
                            }
                        }
                    }
                }
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

        // Выпадающий Список над фильтрами
        $dropdown = CatalogDropDown::all()->sortBy('sort');
        foreach ($dropdown as $key => $elem) {
            if (($locale == 'ru' && $request->path() == $elem->link_ru) || ($locale == 'uk' && $request->path() == $elem->link_uk)) {
                $firstElem = $elem;
                unset($dropdown[$key]);
            }
        }
        $dropdown = array_values($dropdown->toArray());
        if (isset($firstElem)) {
            array_unshift($dropdown, $firstElem->toArray());
        }


        // Описание:
        $desc = [
            'ru' => '',
            'uk' => '',
        ];

        if ($instantRedirect) {
            if ($instantRedirect->description_ru || $instantRedirect->description_uk) {
                $desc['ru'] = $instantRedirect->description_ru;
                $desc['uk'] = $instantRedirect->description_uk;
                $page->title_ru = $instantRedirect->title_ru;
                $page->title_uk = $instantRedirect->title_uk;
            }
        } else if ($instantCategory) {
            if ($instantCategory->description_ru || $instantCategory->description_uk) {
                $desc['ru'] = $instantCategory->description_ru;
                $desc['uk'] = $instantCategory->description_uk;

                $page->title_ru = $instantCategory->title_ru;
                $page->title_uk = $instantCategory->title_uk;
            }
        } else if ($instantManufacturer) {
            if ($instantManufacturer->description_ru || $instantManufacturer->description_uk) {
                $desc['ru'] = $instantManufacturer->description_ru;
                $desc['uk'] = $instantManufacturer->description_uk;

                $page->title_ru = $instantManufacturer->title_ru;
                $page->title_uk = $instantManufacturer->title_uk;
            }
        } else if ($instantTag) {
            if ($instantTag->description_ru || $instantTag->description_uk) {
                $desc['ru'] = $instantTag->description_ru;
                $desc['uk'] = $instantTag->description_uk;

                $page->title_ru = $instantTag->title_ru;
                $page->title_uk = $instantTag->title_uk;
            }
        } else {
            $desc['ru'] = $page->description_ru;
            $desc['uk'] = $page->description_uk;
        }


        /*$gg = GroupAttribute::all();
        foreach ($gg as $g) {
            $g->slug_ru = SlugService::createSlug(GroupAttribute::class, 'slug_ru', $g->title_ru);
            $g->slug_uk = SlugService::createSlug(GroupAttribute::class, 'slug_uk', $g->title_uk);
            $g->save();
        }*/

        /*$aa = Attribute::all();
        foreach ($aa as $a) {
            $a->slug_ru = SlugService::createSlug(Attribute::class, 'slug_ru', $a->name_ru);
            $a->slug_uk = SlugService::createSlug(Attribute::class, 'slug_uk', $a->name_uk);
            $a->save();
        }*/

        return view('site.catalog', compact('translate', 'desctran', 'locale', 'filters', 'dropdown', 'instantCategory', 'childCategories', 'instantManufacturer', 'instantTag', 'instantRedirect', 'desc', 'page'));
    }

    //page site
    public function about() {
        $locale = App::getLocale();
        $page = Page::where( 'type', 'about')->first();

        return view( 'site.about', compact( 'locale', 'page' ) );
    }

    public function info() {
	    $locale = App::getLocale();
        $page = Page::where( 'type', 'info')->first();

        $translate = [
            'store' => Lang::trans('product.store'),
            'useful' => Lang::trans('site.info.useful'),
            'info' => Lang::trans('site.map.info'),
        ];

        $tabs = [
            'delivery' => Page::where('type', 'delivery')->first(),
            'pay' => Page::where('type', 'pay')->first(),
            'guarantee' => Page::where('type', 'guarantee')->first(),
            'return' => Page::where('type', 'return')->first(),
        ];

        $desc = [
            'ru' => $page->description_ru,
            'uk' => $page->description_uk,
        ];

	    return view('site.info', compact('page', 'locale', 'translate', 'desc', 'tabs'));
    }

    public function map() {
        $page = Page::where( 'type', 'map' )->first();
        $translate = [
            'store' => Lang::trans('product.store'),
            'sale' => Lang::trans('product.sale'),
            'back' => Lang::trans('product.back'),
            'map' => Lang::trans('site.footer.map'),

            'main' => Lang::trans('site.map.main'),
            'catalog' => Lang::trans('site.map.catalog'),
            'info' => Lang::trans('site.map.info'),
            'blog' => Lang::trans('site.map.blog'),
            'manufacturers' => Lang::trans('site.map.manufacturers'),
            'tags' => Lang::trans('site.map.tags'),
        ];

        $locale = App::getLocale();

        $mainCats = Category::where('parent_id', 0)->get();
        foreach ($mainCats as $mainCat) {
            $subCats = Category::where('parent_id', $mainCat->id)->get();
            foreach ($subCats as $subCat) {
                $subSubCats = Category::where('parent_id', $subCat->id)->get();
                $subCat->thirdLayer = $subSubCats;
            }
            $mainCat->secondLayer = $subCats;
        }

        $manufacturers = Manufacturer::all();

        $tags = Tag::all();

        /*foreach ($mainCats->first()->secondLayer as $cat) {
            if ($cat->thirdLayer->count() != 0) {
                dd($cat);
            }
        }
        dd($mainCats->first()->secondLayer);*/

	    return view('site.map', compact('translate', 'locale', 'mainCats', 'manufacturers', 'tags', 'page'));
    }

    public function search(Request $request) {
	    if (!$request->q) {
	        abort(404);
        }
        $page = Page::where( 'type', 'search' )->first();

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
            'to_cart' => Lang::trans('product.to_cart'),
            'no_availability' => Lang::trans('product.no_availability'),
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
            'show_more' => Lang::trans('site.catalog.show_more'),
            'in_this_cat' => Lang::trans('site.catalog.in_this_cat'),
            'all1' => Lang::trans('site.catalog.all1'),
            'all2' => Lang::trans('site.catalog.all2'),

            'back' => Lang::trans('site.basket.back'),
            'crumb' => Lang::trans('site.search.crumb'),
            'search' => Lang::trans('site.search.search'),
            'founded' => Lang::trans('site.search.founded'),
        ];

	    $query = $request->q;
	    $locale = App::getLocale();

	    return view('site.search', compact('translate', 'locale', 'query', 'page'));
    }

    public function takeOrder() {
	    if (App::getLocale() == 'ru') {
            return redirect('/ru')->with('order', 'success');
        } else {
            return redirect('/')->with('order', 'success');
        }
    }
}
