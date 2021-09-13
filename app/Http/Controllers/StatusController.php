<?php

namespace App\Http\Controllers;

use App\Status;
use Illuminate\Http\Request;
use App\Contact;
use App\Order;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexAdmin( Request $request ) {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

        $statuses = Status::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.status.index', compact( 'statuses', 'contacts_count', 'order_count' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        return view('admin.status.create', compact('order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = new Status();

        $status->title = $request->title;
        $status->public = $request->public;
        $status->save();

        return redirect('/admin/status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $status = Status::find($id);

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.status.edit')->with(compact('status', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $status = Status::find($id);

        $status->title = $request->title;
        $status->public = $request->public;
        $status->save();

        return redirect('/admin/status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Status  $status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = Status::find($id);

        $status->delete();

        return back()->withMessage( 'Status Delete' );
    }
}
