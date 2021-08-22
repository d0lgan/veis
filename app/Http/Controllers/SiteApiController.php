<?php

namespace App\Http\Controllers;

use App\Document;
use App\GroupAttribute;
use App\Manufacturer;
use App\Option;
use App\Order;
use App\Product;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use LisDev\Delivery\NovaPoshtaApi2;
use function foo\func;

class SiteApiController extends Controller
{
    public function getProducts()
    {
        $query = Product::withFilters(
            request()->input('sel_filters', []),
            request()->input('prices', []),
            request()->input('tags', []),
            request()->input('sale', []),
            request()->input('childCategories', []),
            request()->input('IdOfInstantCategory', null),
            request()->input('IdOfInstantManufacturer', null),
            request()->input('IdOfInstantTag', null),
        )->with('galleries', 'attributes', 'tags', 'stock')->where('image', '<>', null)->where('price', '<>', 0);



        $countProducts = $query->count();

        if (request()->input('fakePageForMoreProducts') - request()->input('page') == 1) {

            $offset = request()->input('fakePageForMoreProducts', 0) * 11;
            $products = $query->offset($offset)->limit(12)->get();
        } else if (request()->input('fakePageForMoreProducts') - request()->input('page') > 1) {
            $offset = ((request()->input('page', 0)) * 11) + ((request()->input('fakePageForMoreProducts') - request()->input('page')) * 12);
            $products = $query->offset($offset)->limit(12)->get();
        } else {
            $offset = request()->input('page', 0) * 11;
            $products = $query->offset($offset)->limit(request()->input('limit', 11))->get();
        }




        return response()->json([
            'products' => $products,
            'countProducts' => $countProducts
        ]);
    }

    public function searchProducts() {
        $query = Product::searchProducts(
            request()->input('query', '')
        )->with('galleries', 'attributes', 'tags', 'stock')->where('image', '<>', null)->where('price', '<>', 0);

        $countProducts = $query->count();

        if (request()->input('fakePageForMoreProducts') - request()->input('page') == 1) {

            $offset = request()->input('fakePageForMoreProducts', 0) * 11;
            $products = $query->offset($offset)->limit(12)->get();
        } else if (request()->input('fakePageForMoreProducts') - request()->input('page') > 1) {
            $offset = ((request()->input('page', 0)) * 11) + ((request()->input('fakePageForMoreProducts') - request()->input('page')) * 12);
            $products = $query->offset($offset)->limit(12)->get();
        } else {
            $offset = request()->input('page', 0) * 11;
            $products = $query->offset($offset)->limit(request()->input('limit', 11))->get();
        }




        return response()->json([
            'products' => $products,
            'countProducts' => $countProducts
        ]);
    }

    public function getValPrice()
    {
        $instantCategories = request()->input('instantCategories', null);
        $instantManufacturer = request()->input('idOfInstantManufacturer', null);
        $instantTag = request()->input('idOfInstantTag', null);
        if ($instantCategories) {
            $products = Product::where(function ($query) use ($instantCategories) {
                $query->whereIn('category_id', $instantCategories)->orWhere(function ($que) use ($instantCategories) {
                    $que->whereHas('categories', function ($q) use ($instantCategories) {
                        $q->whereIn('categories.id', $instantCategories);
                    });
                });
            })->where('price', '<>', 0);
        } else if ($instantManufacturer) {
            $products = Product::where('manufacturer_id', $instantManufacturer)->where('price', '<>', 0);
        } else if ($instantTag) {
            $products = Product::whereHas('tags', function($q) use ($instantTag) {
                $q->whereIn('tags.id', [$instantTag]);
            })->where('price', '<>', 0);
        } else {
            $products = Product::where('price', '<>', 0);
        }

        $vals = [
            'max' => round($products->max('price')),
            'min' => round($products->min('price')),
        ];
        return json_encode($vals);
    }

    public function getTags()
    {
        $instantCategories = request()->input('instantCategories', null);
        $instantManufacturer = request()->input('idOfInstantManufacturer', null);
        // Получение тегов
        if ($instantCategories) {
            $tags = Tag::withCount(['products' => function ($query) use ($instantCategories) {
                $query->whereIn('category_id', $instantCategories)->orWhere(function ($que) use ($instantCategories) {
                    $que->whereHas('categories', function ($q) use ($instantCategories) {
                        $q->whereIn('categories.id', $instantCategories);
                    });
                });
            }])->get()->map->toArray()->sortByDesc('products_count');
        } else if ($instantManufacturer) {
            $tags = Tag::withCount(['products' => function ($query) use ($instantManufacturer) {
                $query->where('manufacturer_id', $instantManufacturer);
            }])->get()->map->toArray()->sortByDesc('products_count');
        } else {
            $tags = Tag::withCount('products')->get()->map->toArray()->sortByDesc('products_count');
        }

        return response()->json(array_values($tags->toArray()));
    }

    public function getProductWithOptions()
    {
//        dd(request()->input('slug', false));
        $locale = request()->input('locale', 'ru');

        $product = Product::where('slug_ru', request()->input('slug'))->first();
        $arr = [];
        $product->data = $arr;
        $product->galleries;
        $product->description = trim($product->description_ru, '<p></p>');


        $options = Option::with('values')->get();

        // echo "<pre>";
        // var_dump(Document::get('option', 'title', 3, "ru"));
        // echo "</pre>";
        // exit;


        $selected_product_values = $product->productValues()->get();
        $selected_values = null;

        $selected_product_values->load(['valueOption' => function ($items) use (&$selected_values) {
            $selected_values = $items->get();
        }]);

        $selected = [];
        $select_options = null;
        if ($selected_values != null) {
            $selected_values->load(['select_options' => function ($items) use (&$select_options) {
                $select_options = $items->get();
            }]);

            if ($select_options != null) {

                for ($so = 0; $so < count($select_options); $so++) {
                    $select_options[$so]->title = Document::get('option', 'title', $select_options[$so]->id, $locale);
                    $selected[$so]['option'] = $select_options[$so];
                    for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                        for ($o = 0; $o < count($options); $o++) {
                            for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                    $values = [];
                                    foreach ($options[$o]->values as $val) {
                                        $val->value = Document::get('option_value', 'value', $val->id, $locale);
                                        $values[] = $val;
                                    }
                                    $selected[$so]['values'][] = $values;
                                    $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                }
                            }
                        }
                    }
                    $selected[$so]['select'] = null;
                }
            }
        }
        // echo "<pre>";
        // var_dump($selected);
        // echo "</pre>";
        // exit;
        $product->options = $selected;
        $product->selected_options = [];

        $group_attributes = null;
        $select_attributes = null;


        $product->load(['attributes.group_attribute' => function ($items) use (&$group_attributes) {
            $group_attributes = $items->orderBy('sort')->get();
        }]);

        $product->load(['attributes' => function ($items) use (&$select_attributes) {
            $select_attributes = $items->orderBy('sort')->get();
        }]);

        $selected_attr = [];
        if ($group_attributes != null) {
            foreach ($group_attributes as $key => $a) {

                $selected_attr[$key]['title'] = Document::get('group_attribute', 'title', $a->id, $locale);
                foreach ($a->attributes as $attr) {
                    $attr->long_title = Document::get('attribute', 'long_title', $attr->id, $locale);
                    $selected_attr[$key]['params'][] = $attr;
                    for ($i = 0; $i < count($select_attributes); $i++) {
                        if ($select_attributes[$i]->id == $attr->id) {
                            $selected_attr[$key]['selected'][] = $select_attributes[$i]->id;
                        }
                    }
                }


            }
        }


        $settings = Setting::first();


        $product->tags;
        $product->manufacturer;

        // Проверяем есть ли действительно картинка записанная в поле how_size
        $file = public_path() . '/house/uploads/' . $product->how_size;
        if (File::exists($file) === false) {
            $product->how_size = null;
        }
        return response()->json($product);
    }

    public function getCities() {
        $keyword = request()->input('keyword', '');
        $locale = request()->input('locale', 'ua');

        $nova = new NovaPoshtaApi2('da4853a09c9093039c2354f700a661e1', 'ua');

        $cities = $nova->getCities(0, $keyword);

        return response()->json([
            'cities' => $cities['data'],
        ]);
    }

    public function getPoints() {
        $nova = new NovaPoshtaApi2('da4853a09c9093039c2354f700a661e1', 'ua');

        $locale = request()->input('locale', 'uk');
        $string = request()->input('keyword', '');
        $ref = request()->input('ref', '');

        if ($string) {
            $refs = $nova->getWarehouse($ref, $string);
        } else {
            $refs = $nova->getWarehouses($ref);
        }


        if ($locale == 'uk') {
            $refs = collect($refs['data'])->pluck('Description')->toArray();
        } else if ($locale == 'ru') {
            $refs = collect($refs['data'])->pluck('DescriptionRu')->toArray();
        }

        return response()->json([
            'points' => $refs,
        ]);
    }

    // Admin - Get recent orders

    public function getRecentOrders()
    {
        $orders = Order::where('status', 'Новый')->where('confirm', 1)->orderBy( 'created_at', 'desc')->get();

        return response()->json([
            'orders' => $orders,
        ]);
    }

    public function saveTableProductsOptions()
    {
        $settings = request()->input('settings', 'null');

        $model = Setting::first();
        $model->table_product_settings = json_encode($settings);
        $model->save();

        return response()->json([
            'settings' => $model->table_product_settings,
        ]);
    }

    public function getTableProductsOptions()
    {
        $model = Setting::first();

        return response()->json([
            'settings' => $model->table_product_settings,
        ]);
    }
}
