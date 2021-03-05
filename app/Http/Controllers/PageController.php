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
	    return view('site.home');
    }

    public function catalog() {
        return view('site.catalog');
    }
}
