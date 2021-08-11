<?php
namespace App\Widgets;
use App\Document;
use App\Widgets\Contract\ContractWidget;
/*use App\Product;*/
use DB;
use Carbon\Carbon;

class NewProductWidget implements ContractWidget
{
	public function execute() {

		//получаем дату
		$current = Carbon::now();
		//получаем - 2 недели
		$my_date = Carbon::now()->subDays(14);

		$products = DB::table('products')->where('public', 1)
		              ->whereBetween('created_at', [$my_date, $current])
		              ->limit(3)
		              ->get()->each(function ($item) {
		                  $item->title = Document::get('product', 'title', $item->id, \LaravelLocalization::getCurrentLocale());
            });

		return view( 'Widgets::new_products', compact('products', 'test'));
	}
}