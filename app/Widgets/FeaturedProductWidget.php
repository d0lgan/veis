<?php
namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use App\Product;
use DB;

class FeaturedProductWidget implements ContractWidget
{
	public function execute(){
		$products = DB::table('products')->where('type','=','featured')->limit(3)->get();
		return view('Widgets::featured_products', [
			'products' => $products
		]);
	}
}