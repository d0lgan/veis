<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Product;
use App\User;
use App\Tag;
use App\Category;
use App\Page;
use App\Contact;
use App\Order;
use App\Comment;
use App\Manufacturer;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index( Request $request ) {
		if ( Auth::user()->roles[0]->name == 'admin' ) {
			//разрешаем админу
			$request->user()->authorizeRoles( [ 'admin' ] );

			$users         = User::all();
			$products      = Product::all();
			$categories    = Category::all();
			$pages         = Page::all();
			$tags          = Tag::all();
			$contacts      = Contact::all();
			$contacts_count   = $contacts->count();
			$orders        = Order::all();
			$order_count   = $orders->count();
			$comments      = Comment::all();
			$manufacturers = Manufacturer::all();
            $orders = Order::where('confirm', 0)->orderBy( 'created_at', 'desc' )->limit(5)->get();

			return view( 'admin.home', compact( 'users', 'products', 'categories', 'pages', 'tags', 'contacts', 'orders', 'comments', 'manufacturers', 'order_count', 'contacts_count' ) );
		} else {
			return redirect()->route( 'login' );
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		//
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
	public function edit( $id ) {
		//
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		//
	}
}
