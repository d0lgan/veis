<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use App\Contact;
use App\Order;

class CurrencyController extends Controller
{
    public function indexAdmin( Request $request )
    {


        echo \Session::get('currency');

        $currencies = Currency::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.currency.index', compact( 'currencies', 'order_count', 'contacts_count' ) );
    }

    public function edit( Request $request, $id )
    {

        $currency  = Currency::find( $id );

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.currency.edit', compact( 'currency', 'contacts_count', 'order_count' ) );
    }


    public function update( Request $request, $id )
    {
        Currency::where( 'default', 1 )
            ->first()
            ->update( [ 'default' => 0 ] );

        Currency::where( 'id', $id )->first()->update( $request->all() );

        return back()->withErrors('Обновлен!');

    }
}
