<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use App\Language;
use App\Document;
use App\Contact;
use App\Order;

class StockController extends Controller
{
    public function indexAdmin(Request $request)
    {
        $request->user()->authorizeRoles( [ 'admin' ] );

        $stocks = Stock::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();


        return view('admin.stock.index', compact('stocks', 'order_count', 'contacts_count'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = Language::all();
        $stock = null;
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.stock.create', compact('langs', 'stock', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $stock = new Stock();
        $stock->title_ru = $request->title_ru;
        $stock->title_uk = $request->title_uk;
        $stock->label = $request->label;
        $stock->public = $request->public;
        $stock->save();

        return redirect()->route('admin-stocks-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        $stock = Stock::find($id);
        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('stock', 'title', $stock->id, $lang->locate_code),
                'label' => Document::get('stock', 'label', $stock->id, $lang->locate_code),
                'public' => Document::get('stock', 'public', $stock->id, $lang->locate_code),
            ];
        }
        $stock->data = $arr;

        return view('admin.stock.edit', compact('stock', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stock = Stock::find($id);

        $stock->title_ru = $request->title_ru;
        $stock->title_uk = $request->title_uk;
        $stock->label = $request->label;
        $stock->public = $request->public;

        $stock->save();

        return redirect()->route('admin-stocks-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stock = Stock::find($id);
        $stock->delete();

        return redirect()->route('admin-stocks-index');
    }
}
