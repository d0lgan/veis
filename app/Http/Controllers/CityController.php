<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use DB;
use LisDev\Delivery\NovaPoshtaApi2;
use Session;
use App\Contact;
use App\Order;

class CityController extends Controller
{
	//todo подключить скрон раз в месяц

	public function cronNovaPoshtaCity(){

		//подключение
		$np = new NovaPoshtaApi2('35ef8ee761a70a986452d8f21bea2f0d');
		//получение городов
		$cities_all = $np->getCities();
		$cities = collect($cities_all['data']);
		//запись городов
		foreach ($cities as $city){
			City::create([
				'title' => $city['DescriptionRu'],
				'country_id' => 1,
				'ref' => $city['Ref']
			]);
		}
	}

	public function citiesAjax(Request $request)

	{
		$data = [];
		if($request->has('q')){
			$search = $request->q;
				$data = DB::table("cities")
				          ->select("ref","title")
				          ->where('title','LIKE',"%$search%")
				          ->get();
		}
		return response()->json($data);
	}

	public function pointsAjax(Request $request)

	{
		$data = [];
		if($request->has('q')){
			$search = $request->q;
				$data = DB::table("point_deliveries")
				          ->select("id","title")
				          ->where('title','LIKE',"%$search%")
				          ->get();
		}
		return response()->json($data);
	}

	public function NovaPoshtaPointDeliveryAjax(Request $request){

		//подключение
		$np = new NovaPoshtaApi2('35ef8ee761a70a986452d8f21bea2f0d');

		    $data = [];
			$Warehouses = $np->getWarehouses( $request->city );
		    $results = collect($Warehouses['data']);
			foreach ( $results as $result ) {
				$data[] = $result['DescriptionRu'];
			}

		return response()->json($data);
	}

}
