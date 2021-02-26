<?php

namespace App\Http\Controllers;

use App\Document;
use App\Language;
use Illuminate\Http\Request;
use App\Contact;
use App\Order;
use App\Tag;
use DB;
use App\Page;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as Image;
use App\Product;

class TagController extends Controller {
	public function index( $slug ) {
		$page = DB::table( 'pages' )->where( 'type', 'tag' )->first();
		$tag  = Tag::whereSlug( $slug )->firstOrFail();
		pagetitle( $tag->meta_h1 );

		return view( 'site.tag', compact( 'tag', 'page' ) );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexAdmin( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$tags = Tag::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();
		return view( 'admin.tag.index', compact( 'tags', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$tag = null;
		$langs = Language::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.tag.create', compact( 'tag', 'langs', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {

		$tag = new Tag;

		$tag->name_ru = $request->title_ru;
		$tag->name_uk = $request->title_uk;

        if ($request->slug_ru) {
            $tag->slug_ru = $request->slug_ru;
        }
        if ($request->slug_uk) {
            $tag->slug_uk = $request->slug_uk;
        }

		$tag->save();


        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'tag',
                    'module_id' => $tag->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

		return redirect()->route('admin-tags-index')
			->withInput()
			->withErrors( array( 'info_messages' => 'Создан!' ) );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show( $id ) {
		//
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
		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();
        $langs = Language::all();
		$tag = Tag::find( $id );
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('tag', 'title', $tag->id, $lang->locate_code)
            ];
        }
        $tag->data = $arr;

		return view( 'admin.tag.edit', compact( 'tag', 'langs', 'order_count', 'contacts_count' ) );
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
		$tag = Tag::find( $id );
		$tag->name_ru = $request->title_ru;
		$tag->name_uk = $request->title_uk;
		$tag->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'tag',
                        'module_id' => $tag->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

		return back()
			->withInput()
			->withErrors( array( 'info_messages' => 'Обновлен!' ) );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		DB::table('tags')->where('id', $id)->delete();
		DB::table('documents')->where('module_id', $id)->where('module', 'tag')->delete();

		return back()->withMessage( 'Tags Delete' );
	}
}
