<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Contact;
use App\Order;
use Illuminate\Http\Request;

class SupplierController extends Controller
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

        $suppliers = Supplier::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.supplier.index', compact( 'suppliers', 'order_count', 'contacts_count' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        $suppliers = Supplier::all();

        return view( 'admin.supplier.create', compact( 'suppliers', 'order_count', 'contacts_count' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create($request->all());
        return redirect()
            ->route('admin-suppliers-index')
            ->withErrors('Создано');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.supplier.edit', compact('supplier', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id);

        $supplier->title = $request->title;
        $supplier->link = $request->link;
        $supplier->exchange = $request->exchange;
        $supplier->add_new_products = $request->add_new_products;
        $supplier->update_new_products = $request->update_new_products;
        $supplier->overwrite_products = $request->overwrite_products;

        $supplier->save();

        return back()->withErrors('Обновлен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return redirect()->route('admin-suppliers-index');
    }
}
