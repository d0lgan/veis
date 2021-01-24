<?php
namespace App\Widgets;
use App\Document;
use App\Widgets\Contract\ContractWidget;
use App\Category;

class TreeCategoryWidget implements ContractWidget
{
	public function execute(){

		/*todo Category - Trable 4*/
		/*$categories = Category::where('at_home', 1)->get()->each(function($item) {
		    $item->title = Document::get('category', 'title', $item->id, \LaravelLocalization::getCurrentLocale());
        });*/
        $categories = Category::where('at_home', 1)->get();
		/*$allCategories = Category::all()->each(function($item) {
		    $item->title = 'lox';
        })->values();*/
		return view('Widgets::tree_category', compact('categories'
            /*'allCategories'*/));
	}
}