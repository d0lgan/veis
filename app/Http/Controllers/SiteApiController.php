<?php

namespace App\Http\Controllers;

use App\Document;
use App\GroupAttribute;
use App\Manufacturer;
use App\Option;
use App\Product;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            request()->input('IdOfInstantCategory', null)
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
        if ($instantCategories) {
            $products = Product::where(function ($query) use ($instantCategories) {
                $query->whereIn('category_id', $instantCategories)->orWhere(function ($que) use ($instantCategories) {
                    $que->whereHas('categories', function ($q) use ($instantCategories) {
                        $q->whereIn('categories.id', $instantCategories);
                    });
                });
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

    public function getManufacturers()
    {
        $manufacturers = Manufacturer::withCount('products')->get()
            ->map->toArray()->sortByDesc('products_count');

        return response()->json(array_values($manufacturers->toArray()));
        //return ManufacturerResource::collection($manufacturers);
    }

    public function getGenders()
    {
        $genders = GroupAttribute::where('id', 14)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            // Сортировка по количеству продуктов (map - метод коллекций)
            ->map->toArray()->sortByDesc('products_count');

        return response()->json(array_values($genders->toArray()));
    }

    public function getShapes()
    {
        // 21 - Форма оправы
        $shapes = GroupAttribute::where('id', 21)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($shapes->toArray()));
    }

    public function getUvFilters()
    {
        $uvFilters = GroupAttribute::where('id', 15)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($uvFilters->toArray()));
    }

    public function getLensColors()
    {
        $lensColors = GroupAttribute::where('id', 18)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($lensColors->toArray()));
    }

    public function getFrameColors()
    {
        $frameColors = GroupAttribute::where('id', 19)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($frameColors->toArray()));
    }

    public function getGradients()
    {
        $gradients = GroupAttribute::where('id', 20)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($gradients->toArray()));
    }

    public function getFrameMaterials()
    {
        $frameMaterials = GroupAttribute::where('id', 22)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($frameMaterials->toArray()));
    }

    public function getFeatures()
    {
        $features = GroupAttribute::where('id', 23)
            ->first()
            ->attributes()
            ->withCount('products')
            ->get()
            ->map->toArray()->sortByDesc('products_count');


        return response()->json(array_values($features->toArray()));
    }

    public function getTags()
    {
        // Получение тегов
        $tags = Tag::withCount('products')->get()->map->toArray()->sortByDesc('products_count');;

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
}
