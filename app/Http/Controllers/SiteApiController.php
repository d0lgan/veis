<?php

namespace App\Http\Controllers;

use App\GroupAttribute;
use App\Manufacturer;
use App\Product;
use App\Tag;
use Illuminate\Http\Request;

class SiteApiController extends Controller
{
    public function getProducts()
    {
        $query = Product::withFilters(
            request()->input('sel_filters', []),
            request()->input('prices', []),
            request()->input('tags', []),
            request()->input('sale', [])
        )->with('galleries', 'attributes', 'tags')->where('image', '<>', null);

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

    public function getMaxValPrice()
    {
        return intval(round(Product::max('undiscounted'), -1));
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
}
