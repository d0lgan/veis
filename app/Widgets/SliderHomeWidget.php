<?php
namespace App\Widgets;
use App\Widgets\Contract\ContractWidget;
use App\Product;
use App\Setting;

class SliderHomeWidget implements ContractWidget
{
	public function execute(){
		$settings = Setting::all();
		$slide_home = $settings[0]['slide_home'];

		$products = Product::all();
		return view('Widgets::slider_home', compact('products','slide_home'));
	}
}