<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Order;
use Illuminate\Http\Request;
use App\Language;

class languageController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexAdmin( Request $request ) {

		$languages = Language::all();

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.languages.index', compact( 'languages', 'order_count',  'contacts_count' ) );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Request $request, $id ) {

		$language  = Language::find( $id );

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		return view( 'admin.languages.edit', compact( 'language', 'order_count', 'contacts_count' ) );
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
		Language::where( 'default', 1 )
		        ->first()
		        ->update( [ 'default' => 0 ] );
		Language::where( 'id', $id )->first()->update( $request->all() );

		return back()->withErrors('Обновлен!');

	}

}
