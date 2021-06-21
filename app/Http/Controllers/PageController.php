<?php

namespace App\Http\Controllers;

use App\Attribute;
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
use App\Stock;
use App\Tag;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
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
            'no_availability' => Lang::trans('product.no_availability'),
            'to_cart' => Lang::trans('product.to_cart'),
        ];

	    $leftStock = Stock::where('side', 'left')->orderBy('created_at', 'desc')->first();
	    $rightStock = Stock::where('side', 'right')->orderBy('created_at', 'desc')->first();

        $leftGlasses = Product::orderBy('created_at', 'desc')
            ->where('title_ru', 'like', '%очки%')
            ->where('stock_id', $leftStock->id)
            ->take(8)
            ->with('galleries', 'attributes', 'tags', 'stock')
            ->get()
            ->toArray();

        $rightGlasses = Product::orderBy('created_at', 'desc')
            ->where('title_ru', 'like', '%очки%')
            ->where('stock_id', $rightStock->id)
            ->take(8)
            ->with('galleries', 'attributes', 'tags', 'stock')
            ->get()
            ->toArray();

        $brands = Brand::orderBy('sort')->get();

        $locale = App::getLocale();
	    return view('site.home', compact('leftGlasses', 'rightGlasses', 'leftStock', 'rightStock', 'locale', 'translate', 'brands'));
    }

    public function catalog(Request $request, $categorySlug = null) {

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
        ];
        $locale = App::getLocale();

        if ($categorySlug) {
            if ($locale == 'ru') {
                // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
                $category = Category::where('slug_uk', $categorySlug)->first();
                if ($category) {
                    return redirect('/ru/catalog/' . $category->slug_ru);
                }

                $category = Category::where('slug_ru', $categorySlug)->firstOrFail();
            } else if ($locale == 'uk') {
                //
                $category = Category::where('slug_ru', $categorySlug)->first();
                if ($category) {
                    return redirect('/catalog/' . $category->slug_uk);
                }

                $category = Category::where('slug_uk', $categorySlug)->firstOrFail();
            }
        }


        // Проверка на категорию
        $instantCategory = null;
        if ($categorySlug) {
            $instantCategory = Category::where('slug_ru', $categorySlug)->orWhere('slug_uk', $categorySlug)->firstOrFail();
        }

        // Дочерние категории
        $childCategories = null;
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

        $filters = GroupAttribute::where('public', 1)->with(['attributes' => function ($query) use ($instantCategory, $childCategories) {
            $query->withCount(['products' => function ($q) use ($instantCategory, $childCategories) {
                if ($instantCategory) {
                    $allCats = $childCategories->push($instantCategory->id);

                    $q->where(function ($query) use ($allCats) {
                        $query->whereIn('category_id', $allCats)->orWhere(function ($que) use ($allCats) {
                            $que->whereHas('categories', function ($q) use ($allCats) {
                                $q->whereIn('categories.id', $allCats);
                            });
                        });
                    })->where('price', '<>', 0);
                }
            }]);
        }])->get()->map->toArray()->sortBy('sort')->toArray();
//        dd($filters, $instantCategory);



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

        return view('site.catalog', compact('translate', 'locale', 'filters', 'instantCategory', 'childCategories'));
    }

    public function info() {
	    return view('site.info');
    }

    public function map() {
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

	    return view('site.map', compact('translate', 'locale', 'mainCats', 'manufacturers', 'tags'));
    }
}
