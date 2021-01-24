<?php

namespace App\Http\Controllers;

use App\City;
use App\Cron;
use App\Region;
use App\Warehouses;
use Illuminate\Http\Request;
use App\Country;
use Illuminate\Support\Facades\DB;

class CronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function updateRegions(Request $request){

        if($request->pass == '$2y$12$J7cHKOQlvl8Ti4Mk7ziWl.BPcHRT79Cwcfu68bLR.wU2m7/997kUa'){

            DB::statement("SET foreign_key_checks=0");
            Region::truncate();
            DB::statement("SET foreign_key_checks=1");

//        Country::query()->delete();

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
                CURLOPT_RETURNTRANSFER => True,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\r\n\"apiKey\":\"df7094c841074383e711a68e03909883\",\r\n\"modelName\": \"Address\",\r\n\"calledMethod\": \"getAreas\",\r\n\"methodProperties\": {}\r\n}",
                CURLOPT_HTTPHEADER => array("content-type: application/json",),
            ));
            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);
            curl_close($curl);
            if (!$err) {

                foreach ($response->data as $res){

                    $region = new Region;
                    $region->ref = $res->Ref;
                    $region->description_uk = $res->Description;
                    $region->description_ru = $res->DescriptionRu;
                    $region->areas_center = $res->AreasCenter;
                    $region->save();

                }
            }
        }

    }

    public function updateWarehouses(Request $request){

        if($request->pass == '$2y$12$J7cHKOQlvl8Ti4Mk7ziWl.BPcHRT79Cwcfu68bLR.wU2m7/997kUa'){

            DB::statement("SET foreign_key_checks=0");
            Warehouses::truncate();
            DB::statement("SET foreign_key_checks=1");



            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
                CURLOPT_RETURNTRANSFER => True,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\r\n\"apiKey\": \" df7094c841074383e711a68e03909883\",\r\n\"modelName\": \"Address\",\r\n\"calledMethod\": \"getWarehouses\",\r\n\"methodProperties\": {}\r\n}",
                CURLOPT_HTTPHEADER => array("content-type: application/json",),
            ));
            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);
            curl_close($curl);

            if (!$err) {
                foreach ($response->data as $res){

                    $warehouses = new Warehouses;
                    $warehouses->ref = $res->Ref;
                    $warehouses->site_key = $res->SiteKey;
                    $warehouses->description_uk = $res->Description;
                    $warehouses->description_ru = $res->DescriptionRu;
                    $warehouses->type_of_warehouse = $res->TypeOfWarehouse;
                    $warehouses->number = $res->Number;
                    $warehouses->city_ref = $res->CityRef;
                    $warehouses->city_description_uk = $res->CityDescription;
                    $warehouses->city_description_ru = $res->CityDescriptionRu;
                    $warehouses->save();

                }
            }
        }

    }

    public function updateCities(Request $request){

        if($request->pass == '$2y$12$J7cHKOQlvl8Ti4Mk7ziWl.BPcHRT79Cwcfu68bLR.wU2m7/997kUa'){
            DB::statement("SET foreign_key_checks=0");
            City::truncate();
            DB::statement("SET foreign_key_checks=1");

//        Country::query()->delete();

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.novaposhta.ua/v2.0/json/",
                CURLOPT_RETURNTRANSFER => True,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => "{\r\n\"apiKey\": \" df7094c841074383e711a68e03909883\",\r\n\"modelName\": \"Address\",\r\n\"calledMethod\": \"getCities\",\r\n\"methodProperties\": {}\r\n}",
                CURLOPT_HTTPHEADER => array("content-type: application/json",),
            ));
            $response = json_decode(curl_exec($curl));
            $err = curl_error($curl);
            curl_close($curl);
//dd($response->data[558]);
            if (!$err) {
                foreach ($response->data as $res){

                    $city = new City;
                    $city->ref = $res->Ref;
                    $city->description_uk = $res->Description;
                    $city->description_ru = $res->DescriptionRu;
                    $city->delivery_1 = $res->Delivery1;
                    $city->delivery_2 = $res->Delivery2;
                    $city->delivery_3 = $res->Delivery3;
                    $city->delivery_4 = $res->Delivery4;
                    $city->delivery_5 = $res->Delivery5;
                    $city->delivery_6 = $res->Delivery6;
                    $city->delivery_7 = $res->Delivery7;
                    $city->area = $res->Area;
                    $city->city_id = $res->CityID;
                    $city->settlement_type = $res->SettlementType;
                    $city->save();

                }
            }
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function show(Cron $cron)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function edit(Cron $cron)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cron $cron)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cron  $cron
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cron $cron)
    {
        //
    }
}
