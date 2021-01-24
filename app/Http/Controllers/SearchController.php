<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Page;
use App\Product;

class SearchController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index( Request $request ) {

		$page = DB::table( 'pages' )->where( 'type', 'search' )->first();
		pagetitle( $page->meta_h1 );


		$this->validate( $request, [
			'text' => 'required|min:3',
		] );

		/*построение запроса по товарам и по товарам категории*/
		$search_text   = $request->text;
		$result_search = DB::table( 'products' )
		                   ->select( 'products.*' )
		                   ->join( 'categories', 'products.category_id', '=', 'categories.id' )
		                   ->where( 'products.title', 'like', '%' . $search_text . '%' )
		                   ->orWhere( 'categories.title', 'like', '%' . $search_text . '%' )
		                   ->orderBy( 'products.title', 'DESC' )
		                   ->get();

		return view( 'site.search', compact( 'page', 'search_text', 'result_search' ) );
	}

}