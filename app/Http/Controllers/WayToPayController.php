<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Document;
use App\Language;
use App\Order;
use App\WayToPay;
use Illuminate\Http\Request;

class WayToPayController extends Controller
{
    public function indexAdmin(Request $request)
    {
        $request->user()->authorizeRoles( [ 'admin' ] );

        $wayToPays = WayToPay::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();


        return view('admin.way-to-pay.index', compact('wayToPays', 'order_count', 'contacts_count'));
    }

    public function create()
    {
        $langs = Language::all();
        $wayToPay = null;
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.way-to-pay.create', compact('langs', 'wayToPay', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $wayToPay = new WayToPay();
        $wayToPay->title_ru = $request->title_ru;
        $wayToPay->title_uk = $request->title_uk;
        $wayToPay->public = $request->public;
        $wayToPay->save();

        return redirect()->route('admin-way-to-pays-index');
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
        $wayToPay = WayToPay::find($id);
        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('wayToPay', 'title', $wayToPay->id, $lang->locate_code),
                'label' => Document::get('wayToPay', 'label', $wayToPay->id, $lang->locate_code),
                'public' => Document::get('wayToPay', 'public', $wayToPay->id, $lang->locate_code),
            ];
        }
        $wayToPay->data = $arr;

        return view('admin.way-to-pay.edit', compact('wayToPay', 'langs', 'order_count', 'contacts_count'));
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
        $wayToPay = WayToPay::find($id);

        $wayToPay->title_ru = $request->title_ru;
        $wayToPay->title_uk = $request->title_uk;
        $wayToPay->public = $request->public;

        $wayToPay->save();

        return redirect()->route('admin-way-to-pays-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wayToPay = WayToPay::find($id);
        $wayToPay->delete();

        return redirect()->route('admin-way-to-pays-index');
    }
}
