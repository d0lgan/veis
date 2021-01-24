<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use DB;
use App\Page;
use App\Setting;
use App\Order;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$page = DB::table( 'pages' )->where( 'type', 'contact' )->first();
		$settings = Setting::first();
		pagetitle( $page->meta_h1 );

		return view( 'site.contact', compact( 'page', 'settings' ) );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function indexAdmin( Request $request ) {
		//разрешаем админу
		$request->user()->authorizeRoles( [ 'admin' ] );

		$contacts      = Contact::all();
		$contacts_count   = $contacts->count();
		$orders        = Order::all();
		$order_count   = $orders->count();

		$contacts = Contact::orderBy( 'created_at', 'desc' )->get();

		return view( 'admin.contact.index', compact( 'contacts', 'contacts_count', 'order_count' ) );
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

		$this->validate( $request, [
			'name'  => 'required|max:255',
			'phone' => 'required|max:255',
		] );

		$contact               = new Contact;
		$contact->name         = $request->name;
		$contact->type         = $request->type;
		$contact->email        = $request->email;
		$contact->phone        = $request->phone;
		$contact->pages        = $request->pages;
		$contact->message      = $request->message;
		$contact->your_subject = $request->your_subject;
		if ( $request->hasFile( 'file' ) ) {
			$file            = $request->file( 'file' );
			$destinationPath = public_path() . '/house/uploads/file/';
			$filename        = str_random( 20 ) . '.' . $file->getClientOriginalExtension() ?: 'png';
			$contact->file   = $filename;
			if ( $request->hasFile( 'file' ) ) {
				$request->file( 'file' )->move( $destinationPath, $filename );
			}
		}
		$contact->save();

		//отправка письма Админу
		Mail::send( 'emails.admin.create_request', [ 'contact' => $contact ],
			function ( $message ) {
				$setting = Setting::find( 1 );
				$message->from( $setting->email_site, 'Магазин SHOP!' );
				$message->to( $setting->email_site )
				        ->subject( 'Запрос с сайта!' );
			} );

		return back()->withErrors( 'Сообщение отправлено!' );

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

	    $contact = Contact::find($id);

	    $contacts      = Contact::all();
	    $contacts_count   = $contacts->count();
	    $orders        = Order::all();
	    $order_count   = $orders->count();

	    return view('admin.contact.edit', compact('contact', 'order_count', 'contacts_count'));

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

	    $contact = Contact::find($id);

	    if($request->status == 2){
	        Contact::where( 'id', $id )->delete();
        }else{
            $contact->status = $request->status;
            $contact->save();
        }

        return redirect()->route('admin-contacts-index');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( $id ) {
		DB::table( "contacts" )->where( 'id', $id )->delete();

		return back()->withMessage( 'Contacts Delete' );
	}
}
