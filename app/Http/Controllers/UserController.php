<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\User;
use DB;
use App\Role;
use Auth;
use App\Page;
use App\Order;
use App\Cart;
use App\Product;
use App\Contact;

class UserController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$page = DB::table( 'pages' )->where( 'type', 'user-profile' )->first();
		pagetitle( $page->meta_h1 );

		$user   = Auth::user();
		$orders = Auth::user()->orders;
		$orders->transform( function ( $order, $key ) {
			$order->cart = unserialize( $order->cart );

			return $order;
		} );
		//отзывы пользователя
		$user_id      = $user->id;
		$comment_user = DB::table( 'comments' )
		                  ->where( 'user_id', '=', $user_id )
		                  ->orderBy( 'updated_at', 'desc' )
		                  ->paginate( 10 );

		return view( 'site.user-profile', compact( 'user', 'page', 'orders', 'comment_user' ) );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexAdmin( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$users = User::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.user.index', compact( 'users', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$users = User::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.user.create', compact( 'users', 'order_count', 'contacts_count' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request $request
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$user          = new User;
		$user->name    = $request->name;
		$user->slug    = $request->slug;
		$user->email   = $request->email;
		$user->blocked = $request->blocked;
		$user->save();

		return back()
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

		$user  = User::find( $id );
		$roles = Role::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.user.edit', compact( 'user', 'roles', 'order_count', 'contacts_count' ) );
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
		$user          = User::find( $id );
		$user->name    = $request->name;
		$user->slug    = $request->slug;
		$user->phone   = $request->phone;
		$user->email   = $request->email;
		$user->blocked = $request->blocked;
		$user->save();

		//запись в сводную таблицу
//		$user->roles()->attach( $request->role_id );
		$user->roles()->sync( $request->role_id );

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
		DB::table( "users" )->where( 'id', $id )->delete();

		return back()->withMessage( 'User Delete' );
	}
}
