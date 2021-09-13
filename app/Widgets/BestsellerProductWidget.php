<?php
namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use App\Product;
use DB;

class BestsellerProductWidget implements ContractWidget
{
	public function execute(){
		$products = DB::table('products')->where('type','=','bestseller')
		                                 ->limit(3)->get();
		return view('Widgets::bestseller_products', [
			'products' => $products
		]);
	}
}