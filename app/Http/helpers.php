<?php

function currency($price) {

    $rateBy = Session::get('currency') ?? App\Currency::where('default', '=', 1)->firstOrFail()->code;
    $rate = App\Currency::where('code', '=', $rateBy)->firstOrFail();

    return round($price * $rate->rate,2) . ' ' . $rate->code;
}

function dateTimeFormat($date_time){

    $ex = explode("T", $date_time);
    $date = $ex[0];
    $t = explode(":", $ex[1]);
    $time = $t[0] . ":" . $t[1];

    return $date . " " . $time;
}