<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Contact;
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
        $locale = App::getLocale();
		$page = Page::where( 'type', 'home' )->first();
		pagetitle( $page->meta_h1 );
		$users = User::all();
		$settings = Setting::first();
		$slider = Slider::orderBy('sort')->get();
        foreach ($slider as $slide)
        {
            $slide->title = Document::get('slider', 'title', $slide->id, $locale);
            $slide->button = Document::get('slider', 'button', $slide->id, $locale);
            $slide->additional_button = Document::get('slider', 'additional_button', $slide->id, $locale);
            $slide->description = trim(Document::get('slider', 'description', $slide->id, $locale), '<p></p>');
        }
		$manufacturers = Manufacturer::all();
		$brands = Brand::all();

        foreach ($brands as $brand) {
            $brand->title = Document::get('brand', 'title', $brand->id, $locale);
		}

		$categories = Category::where('at_home', 1)->orderBy('sort')->get();


		$translate_universal = [
		    'to_cart' => Lang::trans('filter.to_cart')
        ];
		$arr = [];

        $arr[$locale] = [
//                'desc' => trim(Document::get('category', 'description', $category->id, $locale), '<p></p>'),
            'new' => Document::get('settings', 'new', $settings->id, $locale),
            'sell' => Document::get('settings', 'sell', $settings->id, $locale),
            /*'meta' => Document::get('category', 'meta', $category->id, $locale),
            'seo' => trim(Document::get('category', 'seo', $category->id, $locale), '<p></p>')*/
        ];
        $settings->data = $arr;
		foreach ($categories as $category)
        {
            $arr = [];
            $arr[$locale] = [
//                'desc' => trim(Document::get('category', 'description', $category->id, $locale), '<p></p>'),
                'title' => Document::get('category', 'title', $category->id, $locale),
                /*'meta' => Document::get('category', 'meta', $category->id, $locale),
                'seo' => trim(Document::get('category', 'seo', $category->id, $locale), '<p></p>')*/
            ];
            $category->data = $arr;
        }

        $current = Carbon::now();
        $my_date = Carbon::now()->subDays(14);

//		$n_p = Product::where('public', 1)->whereBetween('created_at', [$my_date, $current])->get();
        $n_p = Product::where('type', 'new')->get();
//        $right_now = date("Y-m-d H:i:s");
//		$s_p = Product::where('end_stock', '>', $right_now)->get();
        $s_p = Product::where('type', 'sell')->get();

		$sell_products = [];
		$sell_categories = [];
        $id_s = 0;
        foreach ($s_p as $product){
            $arr = [];
            $arr[$locale] = [
                /*'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),*/
                'title' => Document::get('product', 'title', $product->id, $locale),
                /*'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')*/
            ];

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
                                        $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $product->options = $selected;
            $product->selected_options = [];

            /*$langs = Language::all();


            foreach ($langs as $lang) {
                $arr[$lang->locate_code] = [
                    'desc' => trim(Document::get('product', 'description', $product->id, $lang->locate_code), '<p></p>'),
                    'title' => Document::get('product', 'title', $product->id, $lang->locate_code),
                    'meta' => Document::get('product', 'meta', $product->id, $lang->locate_code),
                    'seo' => trim(Document::get('product', 'seo', $product->id, $lang->locate_code), '<p></p>')
                ];
            }*/


            $product->data = $arr;
            $product->galleries;
            $product->relations;
            $product->description = trim($product->description, '<p></p>');

            $sell_products[] = $product;

            if(count($sell_categories) == 0){
                $sell_categories[$id_s] = Category::find($product->category_id);
                $id_s++;
            }else{
                $in = false;
                for ($i = 0;$i < count($sell_categories);$i++){
                    if($sell_categories[$i]['id'] == $product->category_id){
                        $in = true;
                    }
                }
                if(!$in){
                    $sell_categories[$id_s] = Category::find($product->category_id);
                    $id_s++;
                }
            }

        }


        foreach ($sell_categories as $category)
        {
            $arr = [];
            $arr[$locale] = [
                /*'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),*/
                'title' => Document::get('category', 'title', $category->id, $locale)
                /*'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')*/
            ];

            $category->data = $arr;

        }
//        dd($sell_categories);

		$new_categories = [];
		$new_products = [];
		$id = 0;
		foreach ($n_p as $product){
		    $arr = [];
            $arr[$locale] = [
                'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                'title' => Document::get('product', 'title', $product->id, $locale),
                'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')
            ];

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
                                        $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $product->options = $selected;
            $product->selected_options = [];

            /*$langs = Language::all();


            foreach ($langs as $lang) {
                $arr[$lang->locate_code] = [
                    'desc' => trim(Document::get('product', 'description', $product->id, $lang->locate_code), '<p></p>'),
                    'title' => Document::get('product', 'title', $product->id, $lang->locate_code),
                    'meta' => Document::get('product', 'meta', $product->id, $lang->locate_code),
                    'seo' => trim(Document::get('product', 'seo', $product->id, $lang->locate_code), '<p></p>')
                ];
            }*/


            $product->data = $arr;
            $product->galleries;
            $product->relations;
            $product->description = trim($product->description, '<p></p>');

            $new_products[] = $product;

            if(count($new_categories) == 0){
                $new_categories[$id] = Category::find($product->category_id);
                $id++;
            }else{
                $in = false;
                for ($i = 0;$i < count($new_categories);$i++){
                    if($new_categories[$i]['id'] == $product->category_id){
                        $in = true;
                    }
                }
                if(!$in){
                    $new_categories[$id] = Category::find($product->category_id);
                    $id++;
                }
            }


            foreach ($new_categories as $category)
            {
                $arr = [];
                $arr[$locale] = [
                    'title' => Document::get('category', 'title', $category->id, $locale)
                ];

                $category->data = $arr;

            }


		}

		$translate_blog = [
            'more' => Lang::trans('blog.more'),
            'all_articles' => Lang::trans('blog.all_articles')
        ];

		$blog_categories = BlogCategory::all();
		foreach ($blog_categories as $category){
		    $category->title = Document::get('blog_category', 'title', $category->id, $locale);
        }
		$blog_articles = Blog::all();
		foreach ($blog_articles as $article){
		    $article->title = Document::get('blog', 'title', $article->id, $locale);
		    $article->short_description = trim(Document::get('blog', 'short_description', $article->id, $locale), '<p></p>');
        }

		return view( 'site.home', compact( 'page', 'users', 'settings', 'slider', 'manufacturers', 'categories', 'locale', 'new_categories', 'new_products', 'blog_categories', 'blog_articles', 'sell_products', 'sell_categories', 'brands', 'translate_blog', 'translate_universal') );
	}

}
