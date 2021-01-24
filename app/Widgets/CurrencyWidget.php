<?php

namespace App\Widgets;
use App\Currency;
use App\Widgets\Contract\ContractWidget;

use Carbon\Carbon;
use DB;
use Session;

class CurrencyWidget implements ContractWidget
{
    public function execute() {

        if(Session::has('currency')) {
            $currency = Session::get('currency');
        } else {
            $currency = Currency::where('default', '=', 1)->firstOrFail();
        }

        return view( 'Widgets::currency', [
            'currency' => $currency,
            'currencies' => $currencies = Currency::all()
        ]);
    }
}
