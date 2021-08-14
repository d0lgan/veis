<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\BlogCategory;
use App\Blog;
use App\Mail\Mailing;
use App\Mailing as Maili;
use App\Category;
use App\Contact;
use App\Document;
use App\Gallery;
use App\GroupAttribute;
use App\Manufacturer;
use App\Option;
use App\Order;
use App\Product;
use App\ProductValue;
use App\Setting;
use App\Supplier;
use App\Tag;
use App\User;
use App\ValueOption;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\ImageManagerStatic as Image;
use App\City;
use App\Warehouses;


class ApiController extends Controller
{
    public function searching(Request $request)
    {

        if($request->q) {
            $searchValues = explode(' ', $request->q);


            $result = Product::where(function ($q) use ($searchValues) {
                foreach ($searchValues as $value) {
                    $q->where('title_ru', 'LIKE', "%{$value}%");
                    $q->where('public', 1);
                    $q->where('price', '<>', 0);
                }
            })->get();

            return response()->json($result);
        }
        return response()->json(false);

    }

    public function group(Request $request)
    {

        $category_id = $request->category_id;

        $data = Category::where('id', $category_id)->with('group_attributes')->first();

        return response()->json($data->group_attributes);
    }

    public function attributes(Request $request)
    {

        $attr = $request->attr;

        $res = GroupAttribute::with('attributes')->findOrFail($attr);
        $res = array(['title_ru' => $res->title_ru, 'params' => $res->attributes, 'selected' => []]);

        if($res) {
            return response()->json($res);
        } else {
            return response()->json(false);
        }

    }

    public function getAttributes(Request $request){

        $product = Product::find($request->product_id);

        $product->load(['attributes.group_attribute' => function ($items) use (&$group_attributes) {
            $group_attributes = $items->get();
        }]);

        $product->load(['attributes' => function ($items) use (&$select_attributes) {
            $select_attributes = $items->get();
        }]);

        $selected_attr = [];
        if ($group_attributes != null) {
            foreach ($group_attributes as $key => $a) {

                $selected_attr[$key]['title_ru'] = $a->title_ru;
                foreach ($a->attributes as $attr) {
                    $selected_attr[$key]['params'][] = $attr;
                    for ($i = 0; $i < count($select_attributes); $i++) {
                        if ($select_attributes[$i]->id == $attr->id) {
                            $selected_attr[$key]['selected'][] = $select_attributes[$i]->id;
                        }
                    }
                }


            }
            foreach ($selected_attr as $k => $sel) {
                $selected_attr[$k]['params'] = array_values(collect($selected_attr[$k]['params'])->sortBy('name_ru')->toArray());
            }
        }

        $result['product'] = $product;
        $result['selected_attr'] = $selected_attr;

        return response()->json($result);
    }

    public function saveAttr(Request $request){

        $product = Product::find($request->product_id);

        if($product->attributes()->sync($request->attribute_id)){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    public function getOption(){

        $options = Option::with('values')->get();

        return response()->json($options);

    }

    public function getSelectedOption(Request $request){

        $product = Product::find($request->product_id);
        $options = Option::with('values')->get();

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
                    $selected[$so]['option'] = $select_options[$so];
                    for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                        for ($o = 0; $o < count($options); $o++) {
                            for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                    $selected[$so]['values'][] = $options[$o]->values;
                                    $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                }
                            }
                        }
                    }
                }
            }
        }

        return response()->json($selected);

    }

    public function saveValueOption(Request $request){

        $product = Product::find($request->product_id);

        // echo "<pre>";
        // var_dump($request->product_id);
        // echo "</pre>";
        // exit;

        $product->productValues()->delete();
        $product->productValues()->detach();

        $values = [];

        for($i = 0; $i < count($request->values);$i++){
            for($j = 0;$j < count($request->values[$i]['product_values']); $j++){
                $product_value = ProductValue::with('valueOption')->create([
                    'price_option' => $request->values[$i]['product_values'][$j]['price_option'],
                    'operation_option' => $request->values[$i]['product_values'][$j]['operation_option'],
                    'value_option_id' => $request->values[$i]['product_values'][$j]['value_option_id'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
                $values[] = $product_value->id;
            }
        }
        $product->productValues()->attach($values);
        return response()->json(true);
    }

    public function getData(Request $request){

        $product = Product::find($request->product_id);

        $manufacturers = Manufacturer::all();
        $suppliers = Supplier::all();
        $categories_json = Category::select(['id', 'title_ru'])->get();
        $tags_json = Tag::select(['id', 'title_ru'])->get();

        $data['product'] = $product;
        $data['product_categories'] = $product->categories;
        $data['manufacturers'] = $manufacturers;
        $data['suppliers'] = $suppliers;
        $data['categories_json'] = $categories_json;
        $data['tags_json'] = $tags_json;


        return response()->json($data);
    }

    public function getGroupData(){

        $data['manufacturers'] = Manufacturer::all();
        $data['suppliers'] = Supplier::all();
        $data['categories_json'] = Category::select(['id', 'title_ru'])->get();

        return response()->json($data);
    }

    public function saveData(Request $request){

        $product = Product::find($request->product['id']);

        if($request->product['type_stock'] == 'percent' && $request->product['stock'] !== null){
            $product->price_stock = $request->product['price'] - ceil($request->product['price'] * $request->product['stock'] / 100);

        }else{
            $product->price_stock = $request->product['stock'];
        }

        $product->stock = $request->product['stock'];
        $product->type_stock = $request->product['type_stock'];
        if(time() > strtotime($request->product['start_stock']) && time() < strtotime($request->product['end_stock']) && $request->product['stock'] > 0){
            $product->status_stock = true;
        }else{
            $product->status_stock = false;
        }
        $product->start_stock = $request->product['start_stock'];
        $product->end_stock = $request->product['end_stock'];
        $product->price = $request->product['price'];
        $product->category_id = $request->product['category_id'];
        $product->category_title = Category::find($request->product['category_id'])->title_ru;
        $product->undiscounted = $request->product['undiscounted'];
        $product->vendor_code = $request->product['vendor_code'];
        $product->ude = $request->product['ude'];
        $product->course = $request->product['course'];
        $product->percent = $request->product['percent'];
        $product->availability = $request->product['availability'];
        $product->type = $request->product['type'];
        $product->model = $request->product['model'];
        $product->supplier = $request->product['supplier'];
        $product->public = $request->product['public'];
        $product->sort = $request->product['sort'];


        $product->manufacturer_id = $request->product['manufacturer_id'];
        $product->manufacturer_title = Manufacturer::find($request->product['manufacturer_id'])->title_ru;

        $product->save();

        $cat = $request->categories;

        $mainCat = false;
        if($cat){
            $product->categories()->detach();
            foreach ($cat as $c) {
                if($c['id'] == $request->product['category_id']){
                    $mainCat = true;
                }

                $product->categories()->syncWithoutDetaching($c['id']);

            }
        }


        if(!$mainCat){
            $product->categories()->syncWithoutDetaching($request->product['category_id']);
        }

        return response()->json(true);

    }

    public function getRelation(Request $request){

        $prod = Product::find($request->product_id);
        $products = [];
        if(isset($request->front)){
            $locale = $request->loca;
            foreach ($prod->relations as $product){
                $arr = [];
                $arr[$locale] = [
                    'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                    'title' => Document::get('product', 'title', $product->id, $locale),
                    'meta' => Document::get('product', 'meta', $product->id, $locale),
                    'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')
                ];

                $options = Option::with('values')->get();

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
                            $selected[$so]['option'] = $select_options[$so];
                            for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                                for ($o = 0; $o < count($options); $o++) {
                                    for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                        if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                            $selected[$so]['values'][] = $options[$o]->values;
                                            $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                        }
                                    }
                                }
                            }
                        }
                    }
                }

                $product->options = $selected;
                $product->selected_options = [];

                /*$langs = Language::all();


                foreach ($langs as $lang) {
                    $arr[$lang->locate_code] = [
                        'desc' => trim(Document::get('product', 'description', $product->id, $lang->locate_code), '<p></p>'),
                        'title' => Document::get('product', 'title', $product->id, $lang->locate_code),
                        'meta' => Document::get('product', 'meta', $product->id, $lang->locate_code),
                        'seo' => trim(Document::get('product', 'seo', $product->id, $lang->locate_code), '<p></p>')
                    ];
                }*/


                $product->data = $arr;
                $product->galleries;
                $product->description = trim($product->description, '<p></p>');

                $products[] = $product;

                /*if(count($sell_categories) == 0){
                    $sell_categories[$id_s] = Category::find($product->category_id);
                    $id_s++;
                }else{
                    $in = false;
                    for ($i = 0;$i < count($sell_categories);$i++){
                        if($sell_categories[$i]['id'] == $product->category_id){
                            $in = true;
                        }
                    }
                    if(!$in){
                        $sell_categories[$id_s] = Category::find($product->category_id);
                        $id_s++;
                    }
                }*/
            }
        }else{
            $products = $prod->relations;
        }

        return response()->json($products);

    }

    public function saveRelation(Request $request){

        $product = Product::find($request->id);

        $product->relations()->detach();
//        return response()->json($request->products);
        foreach ($request->products as $prod){
            $product->relations()->attach($prod['id']);
        }

    }

    public function addMainImage(Request $request){

        $destinationPath = public_path() . '/house/uploads/';
        $img_type = explode("/", $_FILES['image']['type']);

        $path_name_parts = pathinfo($_FILES['image']['name']);

        $image_name = $path_name_parts['filename'] . '_product_main_' . time() . '.' . $img_type[1];
        Image::make($_FILES['image']['tmp_name'])
            ->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save($destinationPath . $image_name);

        return response()->json($image_name);

    }

    public function deleteImage(Request $request){
        $image = Gallery::where('name', $request->file)->get();
        if($image){
            Gallery::where('name', $request->file)->delete();
        }

        if($request->id){
            if($request->type == 'cat'){
                $blogCategory = BlogCategory::find($request->id);
                $blogCategory->image = null;
                $blogCategory->save();
            }else if($request->type == 'art'){
                $blog = Blog::find($request->id);
                $blog->image = null;
                $blog->save();
            }

        }

        $file = public_path() . '/house/uploads/' . $request->file;
        if(File::exists($file)) {
            File::delete($file);
        }

        return response()->json(true);

    }

    public function addGalleryImage(Request $request){

        $destinationPath = public_path() . '/house/uploads/';
        $img_type = explode("/", $_FILES['image']['type']);

        $path_name_parts = pathinfo($_FILES['image']['name']);

        $image_name = $path_name_parts['filename'] . '_product_gallery_' . time() . '.' . $img_type[1];
        Image::make($_FILES['image']['tmp_name'])
            ->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save($destinationPath . $image_name);

        return response()->json($image_name);

    }

    public function getImage(Request $request){

        $product = Product::find($request->product_id);

        $images = [];

        if($product->image){
            $images['main']['name'] = $product->image;
            $images['main']['tmp_name'] = '';
            $images['main']['alt'] = $product->alt;
        }else{
            $images['main']['name'] = '';
            $images['main']['tmp_name'] = '';
            $images['main']['alt'] = '';
        }
        $galleries = $product->galleries;

        if(!$galleries->isEmpty()){
            for($i = 0;$i < count($galleries);$i++){
                $images['gallery'][$i]['name'] = $galleries[$i]->name;
                $images['gallery'][$i]['sort'] = $galleries[$i]->sort;
                $images['gallery'][$i]['alt'] = $galleries[$i]->alt;
            }
        }else{
            $images['gallery'] = [];
        }

        return response()->json($images);

    }

    public function saveImage(Request $request){

        $product = Product::find($request->product_id);

        $product->image = $request->images['main']['name'];
        $product->alt = $request->images['main']['alt'];

        $product->save();
        if(!empty($request->images['main']['tmp_name'])){
            $count_image = Product::where('image', $request->images['main']['tmp_name'])->count();
            if($count_image < 1){
                $file = public_path() . '/house/uploads/' . $request->images['main']['tmp_name'];
                if(File::exists($file)) {
                    File::delete($file);
                }
            }
        }

        $gallery = $request->images['gallery'];

        if(!empty($gallery[0]['name'])){
            for($i = 0;$i < count($gallery);$i++){
                $image = Gallery::where('name', $gallery[$i]['name'])->first();

                if(!$image){
                    Gallery::create([
                        'name' => $gallery[$i]['name'],
                        'sort' => intval($gallery[$i]['sort']),
                        'alt' => intval($gallery[$i]['alt']),
                        'product_id' => $product->id
                    ]);
                }else{
                    $image->sort = intval($gallery[$i]['sort']);
                    $image->alt = $gallery[$i]['alt'];
                    $image->save();

                }
            }
        }
    return response()->json($request->images['main']['name']);

    }

    public function replicateProduct(Request $request){

        $select = $request->select_product;

        for($i = 0;$i < count($select);$i++){
            $product = Product::find($select[$i]['id']);

            $new_product = $product->replicate();
            $new_product->public = 0;
            $new_product->save();

            $product_values = $product->productValues()->get();
            if ($product_values) {
                $values = [];

                for ($i = 0; $i < count($product_values); $i++) {

                    $product_value = ProductValue::with('valueOption')->create([
                        'price_option' => $product_values[$i]->price_option,
                        'operation_option' => $product_values[$i]->operation_option,
                        'value_option_id' => $product_values[$i]->value_option_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                    $values[] = $product_value->id;
                }

                $new_product->productValues()->attach($values);
            }


            $product_gallery = $product->galleries()->get();
            if (!empty($product_gallery)) {
                for ($i = 0; $i < count($product_gallery); $i++) {
                    if (!$product_gallery[$i]->sort) {
                        $product_gallery[$i]->sort = 0;
                    }
                    Gallery::create([
                        'name' => $product_gallery[$i]->name,
                        'sort' => $product_gallery[$i]->sort,
                        'alt' => $product_gallery[$i]->alt,
                        'product_id' => $new_product->id
                    ]);
                }

            }

            //заись в сводную таблицу
            $product_attrs = $product->attributes()->get()->pluck('id')->toArray();
            $new_product->attributes()->attach($product_attrs);

            //запись в сводную таблицу
            $product_tags = $product->tags()->get()->pluck('id')->toArray();
            $new_product->tags()->attach($product_tags);


            $product_category_id = $product->category()->first()->id;
            $product_categories = $product->categories()->get()->toArray();

            $mainCat = false;
            if ($product_categories) {
                foreach ($product_categories as $cat) {
                    if ($cat['id'] == $product_category_id) {
                        $mainCat = true;
                    }
                    $new_product->categories()->syncWithoutDetaching($cat['id']);
                }
            }


            if (!$mainCat) {
                $new_product->categories()->syncWithoutDetaching($product_category_id);
            }




//        $documents = Document::where('module_id', $select[$i]['id'])->get();
//
//        foreach ($documents as $document) {
//
//            $doc = Document::find($document->id);
//
//            $new_doc = $doc->replicate();
//            $new_doc->module_id = $new_product->id;
//            $new_doc->save();
//
//        }

            $new_product->categories()->syncWithoutDetaching($product_category_id);

        }

        $products = Product::with(['category', 'manufacturer'])->get();

        return response()->json($products);
    }

    public function deleteProduct(Request $request){

        $select = $request->select_product;

        for($i = 0;$i < count($select);$i++){
            $product = Product::find($select[$i]['id']);

            if($product->how_size_image){
                $file = public_path() . '/house/uploads/' . $product->how_size_image;
                if(File::exists($file)) {
                    File::delete($file);
                }
            }

            $product->attributes()->detach();
            $product->categories()->detach();
            $product->productValues()->detach();
            $product->tags()->detach();
            Document::where([
                ['module', 'product'],
                ['module_id', $product->id]
            ])->delete();
            $product->delete();
        }

        $products = Product::with(['category', 'manufacturer'])->get();

        return response()->json($products);

    }

    public function searchProduct(Request $request){

        $skip = $request->skip;
        $take = $request->take;
        $select_man = [];
        $select_tag = [];
        $select_attr = [];
        $tmp_attr = [];
        $select = [];
        $select_products = [];
        $locale = $request->loc;
        $right_now = date("Y-m-d H:i:s");

        if($request->man){
            for($i = 0;$i < count($request->man);$i++){
                $man = Manufacturer::find($request->man[$i]['id']);
                $products = $man->products;
                for($j = 0;$j < count($products);$j++){
                    if(!in_array($products[$j]['id'], $select_man)){
                        $select_man[] = $products[$j]['id'];
                    }
                }
            }
        }

        if($request->attr){
            for($i = 0;$i < count($request->attr);$i++){
                $attr = Attribute::find($request->attr[$i]['id']);
                $products = $attr->products;
                $group_id = $attr->group_attribute_id;
                if(!array_key_exists($group_id, $tmp_attr)){
                    $tmp_attr[$group_id] = [];
                }

                for($j = 0;$j < count($products);$j++){
                    if(!in_array($products[$j]['id'], $tmp_attr[$group_id])){
                        $tmp_attr[$group_id][] = $products[$j]['id'];
                    }
                }
            }

            $select_attr = array_shift($tmp_attr);

            foreach ($tmp_attr as $tmp){
                $select_attr = array_intersect($select_attr, $tmp);
            }
        }

        if($select_man && !$select_attr && !$request->attr){
            $select = $select_man;
        }elseif($select_man && !$select_attr && $request->attr){
            $select = [];
        }elseif($select_attr && !$select_man && !$request->man){
            $select = $select_attr;
        }elseif($select_attr && !$select_man && $request->man){
            $select = [];
        }

        if($select_attr && $select_man){
            $select = array_intersect($select_man, $select_attr);
        }

        if($request->tag){
            for($i = 0;$i < count($request->tag);$i++){
                $tag = Tag::find($request->tag[$i]['id']);
                $products = $tag->products;
                for($j = 0;$j < count($products);$j++){
                    if(!in_array($products[$j]['id'], $select_tag)){
                        $select_tag[] = $products[$j]['id'];
                    }
                }
            }
            if($select_tag) {
                if ($select) {
                    $select = array_intersect($select, $select_tag);
                } else {
                    $select = $select_tag;
                }
            }


        }

        if($select){
            $select_p = [];
            for($i = 0;$i < count($select);$i++){
                $product = Product::find($select[$i]);
                $cat = $product->categories;
                for($j = 0;$j < count($cat);$j++){
                    if($request->category_id == $cat[$j]->id){
                        if(!in_array($select[$i], $select_p)){
                            $select_p[] = $select[$i];
                        }
                    }
                }
            }

            for($i = 0;$i < count($select_p);$i++){
                $product = Product::find($select_p[$i]);
                if($product->end_stock > $right_now){
                    $price = $product->price;
                }else{
                    $price = $product->undiscounted;
                }
                if($price >= $request->min_price && $price <= $request->max_price && $product->public == 1){
                    $select_prod[] = $product->id;
                }
            }

            $select_products = Product::whereIn('id', $select_prod)->skip($skip)->take($take)->get();
            $count_p = count($select_p);
        }

        if(!$request->attr && !$request->man && !$request->tag){
            $c = Category::find($request->category_id);
            $count_p = $c->products->count();
            $products = $c->products()->skip($skip)->take($take)->get();
            foreach ($products as $product){
                if($product->end_stock > $right_now){
                    $price = $product->price;
                }else{
                    $price = $product->undiscounted;
                }
                if($price >= $request->min_price && $price <= $request->max_price && $product->public == 1){
                    $select_products[] = $product;
                }
                /*if($product->price >= $request->min_price && $product->price <= $request->max_price && $product->public == 1){
                    $select_products[] = $product;
                }*/
            }
        }

        foreach ($select_products as $product){

            $arr = [];
            $arr[$locale] = [
                'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                'title' => Document::get('product', 'title', $product->id, $locale),
                'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')
            ];

            $options = Option::with('values')->get();

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
                        $selected[$so]['option'] = $select_options[$so];
                        for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                            for ($o = 0; $o < count($options); $o++) {
                                for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                    if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                        $selected[$so]['values'][] = $options[$o]->values;
                                        $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $product->options = $selected;
            $product->selected_options = [];

            $product->data = $arr;
            $product->description = trim($product->description, '<p></p>');
            $product->relations;

        }

        $pro['select_products'] = $select_products;
        $pro['count_p'] = isset($count_p) ? $count_p : 0;

        return response()->json($pro);

    }

    public function searchTableProduct(Request $request){

        if(count($request['headers']) > 0){

            $headers = $request['headers'];

            $products = Product::where(function ($q) use ($headers){
                foreach ($headers as $header){

                    if($header['key'] == 'public'){
                        if($header['value'] == 'Да'){
                            $q->where($header['key'], 'LIKE', "%1%");
                        }else if($header['value'] == 'Нет'){
                            $q->where($header['key'], 'LIKE', "%0%");
                        }

                    }else if($header['key'] == 'availability'){
                        if($header['value'] == 'Да'){
                            $q->where($header['key'], 'LIKE', "%1%");
                        }else if($header['value'] == 'Нет'){
                            $q->where($header['key'], 'LIKE', "%0%");
                        }
                    }else{
                        $q->where($header['key'], 'LIKE', "%{$header['value']}%");
                    }
                }

            })->skip($request->skip)->take($request->take)->get();
            $count_p = count($products);
        }else{
            $count_p = Product::all()->count();
            $products = Product::skip($request->skip)->take($request->take)->get();
        }

        $result['products'] = $products;
        $result['count_p'] = $count_p;

        return response()->json($result);

    }

    public function groupPrice(Request $request){
        $cat = $request->categories;

        foreach($request->select_products as $select){

            $product = Product::find($select['id']);


            if($request->data['type_stock'] == 'percent' && $request->data['stock'] !== null){
                if($request->data['price'] != null){
                    $product->price_stock = $request->data['price'] - ceil($request->data['price'] * $request->data['stock'] / 100);
                }else{

                    $product->price_stock = $product->price - ceil($product->price * $request->data['stock'] / 100);
                }
            }else{
                $product->price_stock = $request->data['stock'];
            }

            if($request->data['stock'] == null){

            }
            if($request->data['stock'] != null){
                $product->stock = $request->data['stock'];
            }
            if($request->data['type_stock'] != null){
                $product->type_stock = $request->data['type_stock'];
            }


            if(time() > strtotime($request->data['start_stock']) && time() < strtotime($request->data['end_stock']) && $request->data['stock'] != null && $request->data['stock'] > 0){
                $product->status_stock = true;
            }else{
                $product->status_stock = false;
            }

            if($request->data['start_stock'] != null){
                $product->start_stock = $request->data['start_stock'];
            }
            if($request->data['end_stock'] != null){
                $product->end_stock = $request->data['end_stock'];
            }


            if($request->data['category_id'] > 0){
                $product->category_id = $request->data['category_id'];
                $product->category_title = Category::find($request->data['category_id'])->title;
            }

            if($request->data['manufacturer_id'] > 0){
                $product->manufacturer_id = $request->data['manufacturer_id'];
                $product->manufacturer_title = Manufacturer::find($request->data['manufacturer_id'])->title;
            }

            if($request->data['supplier_id'] > 0){
                $product->supplier = $request->data['supplier_id'];
            }

            if($request->data['vendor_code'] != null){
                $product->vendor_code = $request->data['vendor_code'];
            }
            if($request->data['model'] != null){
                $product->model = $request->data['model'];
            }
            if($request->data['ude'] != null){
                $product->ude = $request->data['ude'];
            }
            if($request->data['course'] != null){
                $product->course = $request->data['course'];
            }
            if($request->data['price'] != null){
                $product->price = $request->data['price'];
            }
            if($request->data['percent'] != null){
                $product->percent = $request->data['percent'];
            }
            if($request->data['undiscounted'] != null){
                $product->undiscounted = $request->data['undiscounted'];
            }
            if($request->data['end_stock'] != null){
                $product->end_stock = $request->data['end_stock'];
            }
            if($request->data['availability'] != null){
                $product->availability = $request->data['availability'];
            }
            if(!empty($request->data['type'])){
                $product->stock_id = $request->data['type'];
            }

            $product->public = $request->public;
            $product->sort = $request->sort;
            
            $product->save();

//            return response()->json($product);
            $mainCat = false;
            if(count($cat) > 0){
                $product->categories()->detach();
                foreach ($cat as $c) {
                    if($c['id'] == $request->data['category_id']){
                        $mainCat = true;
                    }

                    $product->categories()->syncWithoutDetaching($c['id']);

                }
            }

            if(!$mainCat && $request->data['category_id'] > 0){
                $product->categories()->syncWithoutDetaching($request->data['category_id']);
            }



        }
        return response()->json(true);

    }

    public function getAllProducts(){

        $products = Product::with(['category', 'manufacturer'])->get();

        return response()->json($products);

    }

    public function selectCities(Request $request){


        $cities = City::where('area', $request->ref)->get();

        return response()->json($cities);

    }

    public function selectWarehouses(Request $request){

        $warehouses = Warehouses::where('city_ref', $request->ref)->get();

        return response()->json($warehouses);

    }

    public function createOrder(Request $request){

        $prod = [];

        $now = date('Y-m-d');

        for($i = 0;$i < count($request->products);$i++){
            $prod[$i]['product'] = $request->products[$i]['id'];
            $prod[$i]['count'] = $request->products[$i]['quantity'];
            if($request->products[$i]['status_stock']){
                $prod[$i]['currentPrice'] = $request->products[$i]['price_stock'];
            }else{
                $prod[$i]['currentPrice'] = $request->products[$i]['price'];
            }
            foreach ($request->products[$i]['options'] as $option){
                if($option['select'] != null){
                    $prod[$i]['selected_options'][$option['option']['id']] = $option['select'];
                }
            }
        }

        $pro = json_encode($prod);

        $order = new Order;
        $order->products = $pro;
        $order->new = 1;
        $order->save();

        return response()->json($order->id);

    }

    public function updateOrder(Request $request){

        $request['order'] = json_decode($request['order'], true);

//dd($request['order']);
        $now = date('Y-m-d');

        $order = Order::find($request['order']['id']);

        if($order){
            $change_status = $request['order']['status'] !== $order->status ? true : false;

            /*if($request->products){
                $prod = [];

                for($i = 0;$i < count($request->products);$i++){
                    $prod[$i]['product'] = $request->products[$i]['id'];
                    $prod[$i]['count'] = $request->products[$i]['quantity'];
                    if($request->products[$i]['status_stock']){
                        $prod[$i]['currentPrice'] = $request->products[$i]['price_stock'];
                    }else{
                        $prod[$i]['currentPrice'] = $request->products[$i]['price'];
                    }
                    foreach ($request->products[$i]['options'] as $option){
                        if($option['select'] != null){
                            $prod[$i]['selected_options'][$option['option']['id']] = $option['select'];
                        }
                    }
                }

                $pro = json_encode($prod);
                $order->products = $pro;
            }*/
            if ($request['products']) {
                $order->products = $request['products'];
            }

            $order->name = $request['order']['name'];
            $order->surname = $request['order']['surname'];
            $order->fatherland = $request['order']['fatherland'];
            $order->phone = $request['order']['phone'];
            $order->email = $request['order']['email'];
            $order->type = 'Заказ';
            $order->delivery = $request['order']['delivery'];
            $order->way_to_pay = $request['order']['way_to_pay'];
            $order->city = $request['order']['city'];
            $order->warehouse = $request['order']['warehouse'];
            $order->comment = $request['order']['comment'];
            $order->confirm = $request['order']['confirm'];
            if($order->new == 1 || $order->new == 2){
                if($request['order']['confirm'] == true){
                    $order->new = 2;
                }else{
                    $order->new = 1;
                }
            }

            if($request['order']['status']){
                $order->status = $request['order']['status'];
            }else{
                $order->status = 'Ожидает';
            }
            $order->total = $request['order']['total'];
            $order->region = $request['order']['region'];
            $order->save();

            /*if($request->conf && $change_status && $order->email !== null){

                Mail::to($order->email)->send(new Mailing('', 'change_status', 'Статус заказа изменен', $order->status));
            }*/
            /*if($request->confirm == true){
                $order->new = true;
                if($order->email !== null){
                    $m = Maili::where('email', $order->email)->first();
                    if(!$m){
                        $mail = new Maili;
                        $mail->email = $order->email;
                        $mail->client = 1;
                        $mail->save();
                    }
                    Mail::to($order->email)->send(new Mailing('', 'create_order', 'test'));
                }
                $users = User::with('roles')->get();
                $emails = [];
                foreach ($users as $user){
                    if($user->roles[0]->id == 1){
                        $emails[] = $user->email;
                    }
                }
                Mail::to($emails)->send(new Mailing('', 'admin_create_order', 'test'));
            }*/


            $confirm = json_decode($request['confirm'], true);
            if($confirm == 1) {
                if ($request['order']['email']) {
                    //отправка письма Клиенту
                    $mail_order = $request['order']['email'];
                    Mail::send( 'emails.user.create_order', [ 'order' => $order ],
                        function ( $message ) use ( $mail_order ) {
                            $setting = Setting::find( 1 );
                            $message->from( $setting->send_email, 'Магазин Veis!' );
                            $message->to( $mail_order )
                                ->subject( 'Спасибо за покупку в нашем магазине!' );
                        } );
                }

                //отправка письма Админу
                Mail::send( 'emails.admin.create_order', [ 'order' => $order ],
                    function ( $message ) {
                        $setting = Setting::find( 1 );
                        $message->from($setting->send_email, 'Магазин Veis!' );
                        $message->to($setting->receive_email)
                            ->subject( 'Новый заказ с сайта!' );
                    });
            }

            return response()->json($order);
        }
        /*else{

            $order = new Order;

            if($request->products){
                $prod = [];

                for($i = 0;$i < count($request->products);$i++){
                    $prod[$i]['product'] = $request->products[$i]['id'];
                    $prod[$i]['count'] = $request->products[$i]['quantity'];


                    if($request->products[$i]['status_stock']){
                        $prod[$i]['currentPrice'] = $request->products[$i]['price_stock'];
                    }else{
                        $prod[$i]['currentPrice'] = $request->products[$i]['price'];
                    }


                    foreach ($request->products[$i]['options'] as $option){
                        if($option['select'] != null){
                            $prod[$i]['selected_options'][$option['option']['id']] = $option['select'];
                        }
                    }
//                    $prod[$i]['selected_options'] = $request->products[$i]['selected_options'];
                }

                $pro = json_encode($prod);
                $order->products = $pro;
            }

            $order->name = $request['order']['name'];
            $order->surname = $request['order']['surname'];
            $order->phone = $request['order']['phone'];
            $order->email = $request['order']['email'];
            $order->type = 'Заказ';
            $order->delivery = $request['order']['delivery'];
            // $order->city = $request['order']['city'];
            // $order->warehouse = $request['order']['warehouse'];
            $order->comment = $request['order']['comment'];
            $order->confirm = $request['order']['confirm'];
            $order->new = 3;
            if($request['order']['status']){
                $order->status = $request['order']['status'];
            }else{
                $order->status = 'Ожидает';
            }
            $order->total = $request['order']['total'];
            $order->region = $request['order']['region'];
            $order->save();

            return response()->json($order);

        }*/
        response()->json($order);
    }

    public function searchOrderProduct(Request $request){



    }

    public function getProduct(Request $request){

        $product = Product::find($request->id);
        if($request->loc)
        {
            $locale =$request->loc;
        }else{
            $locale = App::getLocale();
        }


        $options = Option::with('values')->get();
        $now = date('Y-m-d');
        $arr = [];
        $arr[$locale] = [
            'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
            'title' => Document::get('product', 'title', $product->id, $locale),
            'meta' => Document::get('product', 'meta', $product->id, $locale),
            'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')
        ];
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
                    $selected[$so]['option'] = $select_options[$so];
                    for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                        for ($o = 0; $o < count($options); $o++) {
                            for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                    $selected[$so]['values'][] = $options[$o]->values;
                                    $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                }
                            }
                        }
                    }
                    $selected[$so]['select'] = null;
                }
            }
        }
        $product->quantity = 1;
        $product->options = $selected;
        $product->selected_options = [];
        $product->data = $arr;
        if ($product->status_stock){
            $product->currentPrice = $product->price_stock;
        }else{
            $product->currentPrice = $product->price;
        }

        $product->galleries;
        $product->relations;
        $product->description = trim($product->description, '<p></p>');
        return response()->json($product);

    }

    public function createRequest(Request $request){

        $contact = new Contact;

        $contact->type = $request->form['type'];
        $contact->name = $request->form['name'];
        $contact->email = $request->form['email'];
        $contact->phone = $request->form['phone'];
        $contact->theme = $request->form['theme'];
        $contact->message = $request->form['message'];
        $contact->status = true;
        $contact->save();

        return response()->json(true);

    }

    public function createBlogCategory(Request $request){

        if($_FILES){

            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_category_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }else{
            if($request->image == "null"){
                $image = null;
            }else{
                $image = $request->image;
            }
        }

        if(intval($request->id) > 0){
            $category = BlogCategory::find($request->id);

            $category->title = $request->title;
            $category->image = $image;
            $category->save();

        }else{
            $category = new BlogCategory;

            $category->title = $request->title;
            $category->image = $image;
            $category->save();
        }

        $categories = BlogCategory::all();

        return response()->json($categories);

    }

    public function createBlogArticle(Request $request){

        if($_FILES){

            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_article_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }else{
            if($request->image == "null"){
                $image = null;
            }else{
                $image = $request->image;
            }
        }

        if(intval($request->id) > 0){

            $article = Blog::find($request->id);


            $article->title = $request->title;
            $article->category_id = $request->category_id;
            $article->short_desc = $request->short_desc;
            $article->full_desc = $request->full_desc;
            $article->image = $image;
            $article->save();

        }else{
            $article = new Blog;

            $article->title = $request->title;
            $article->category_id = $request->category_id;
            $article->short_desc = $request->short_desc;
            $article->full_desc = $request->full_desc;
            $article->image = $image;
            $article->save();
        }

        $articles = Blog::with('blog_categories')->get();

        return response()->json($articles);

    }

    public function deleteCategory(Request $request){

        $category = BlogCategory::find($request->category['id']);

        $file = public_path() . '/house/uploads/' . $request->category['image'];
        if(File::exists($file)) {
            File::delete($file);
        }

        $category->delete();
        Document::where('module_id', $category->id)->where('module', 'blog_category')->delete();
        $categories = BlogCategory::all();

        return response()->json($categories);

    }

    public function deleteArticle(Request $request){

        $article = Blog::find($request->article['id']);

        $file = public_path() . '/house/uploads/' . $request->article['image'];
        if(File::exists($file)) {
            File::delete($file);
        }

        $article->delete();
        Document::where('module_id', $article->id)->where('module', 'blog')->delete();
        $articles = Blog::with('blog_categories')->get();

        return response()->json($articles);

    }

    public function addOptionImage(Request $request){

        $destinationPath = public_path() . '/house/uploads/';
        $img_type = explode("/", $_FILES['image']['type']);

        $path_name_parts = pathinfo($_FILES['image']['name']);

        $image_name = $path_name_parts['filename'] . '_option_value_' . time() . '.' . $img_type[1];

        Image::make($_FILES['image']['tmp_name'])
            ->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })
            ->save($destinationPath . $image_name);



        return response()->json($image_name);
    }

    public function deleteOptionImage(Request $request){

        $value = ValueOption::where('image', $request->file)->first();
        if(count($value) > 0){
            $value->image = null;
            $value->save();
        }

        $file = public_path() . '/house/uploads/' . $request->file;
        if(File::exists($file)) {
            File::delete($file);
        }

        return response()->json(true);
    }

    public function getStatistics(Request $request){

        $result = [];
        $result['orders'] = 0;
        $result['sales'] = 0;
        $result['contacts'] = 0;
        if($request->from == null && $request->to == null){

            $result['orders'] = Order::where('status', '<>', 'Новый')->count();
            $result['sales'] = Order::where('status', 'Сделка завершена')->count();
            /*$orders = Order::where([['confirm', 1], ['status', 'Выполнен']])->get();

            foreach ($orders as $order){

                $result['sales'] += $order->total;

            }*/

            $result['contacts'] = Contact::all()->count();


        }else if($request->from == null){
            $request->to = $request->to . ' 23:59:59';
            $result['orders'] = Order::where([['created_at', '<=', $request->to], ['confirm', 1]])->count();
            $orders = Order::where([['created_at', '<=', $request->to], ['confirm', 1], ['status', 'Выполнен']])->get();
            foreach ($orders as $order){

                $result['sales'] += $order->total;

            }
        }else{
            if($request->to == null){
                $request->to = Carbon::now();
            }else{
                $request->to = $request->to . ' 23:59:59';
            }
            $request->from = $request->from . ' 00:00:00';

            $result['orders'] = Order::where([['confirm', 1], ['created_at', '>=', $request->from], ['created_at', '<=', $request->to]])->count();

            $orders = Order::where([['confirm', 1], ['created_at', '>=', $request->from], ['created_at', '<=', $request->to], ['status', 'Выполнен']])->get();

            foreach ($orders as $order){

                $result['sales'] += $order->total;

            }

        }

        return response()->json($result);

    }

    public function categoryGroupAttributes(Request $request){

        return response()->json($request->group);

    }

    public function getViewed(Request $request){

        $v_p = Product::whereIn('id', $request->prod)->get();
        $locale = $request->loca;
        $new_categories = [];
        $new_products = [];
        $id = 0;
        foreach ($v_p as $product){
            $arr = [];
            $arr[$locale] = [
                'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                'title' => Document::get('product', 'title', $product->id, $locale),
                'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')
            ];

            $options = Option::with('values')->get();

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
                        $selected[$so]['option'] = $select_options[$so];
                        for ($pv = 0; $pv < count($selected_product_values); $pv++) {
                            for ($o = 0; $o < count($options); $o++) {
                                for ($ov = 0; $ov < count($options[$o]->values); $ov++) {
                                    if ($selected_product_values[$pv]->value_option_id == $options[$o]->values[$ov]->id && $options[$o]->values[$ov]->option_id == $select_options[$so]->id) {
                                        $selected[$so]['values'][] = $options[$o]->values;
                                        $selected[$so]['product_values'][] = $selected_product_values[$pv];
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $product->options = $selected;
            $product->selected_options = [];

            /*$langs = Language::all();


            foreach ($langs as $lang) {
                $arr[$lang->locate_code] = [
                    'desc' => trim(Document::get('product', 'description', $product->id, $lang->locate_code), '<p></p>'),
                    'title' => Document::get('product', 'title', $product->id, $lang->locate_code),
                    'meta' => Document::get('product', 'meta', $product->id, $lang->locate_code),
                    'seo' => trim(Document::get('product', 'seo', $product->id, $lang->locate_code), '<p></p>')
                ];
            }*/


            $product->data = $arr;
            $product->galleries;
            $product->relations;
            $product->description = trim($product->description, '<p></p>');

            $new_products[] = $product;

            if(count($new_categories) == 0){
                $category = Category::find($product->category_id);
                $category->title = Document::get('category', 'title', $category->id, $locale);
                $new_categories[$id] = $category;
                $id++;
            }else{
                $in = false;
                for ($i = 0;$i < count($new_categories);$i++){
                    if($new_categories[$i]['id'] == $product->category_id){
                        $in = true;
                    }
                }
                if(!$in){
                    $category = Category::find($product->category_id);
                    $category->title = Document::get('category', 'title', $category->id, $locale);
                    $new_categories[$id] = $category;
                    $id++;
                }
            }



        }


        $result['products'] = $new_products;
        $result['categories'] = $new_categories;

        return response()->json($result);

    }

    public function getLang(Request $request){

        $res = [];
        foreach ($request->products as $product){

            $product['title'] = Document::get('product', 'title', $product['id'], $request->locate);
            $res[] = $product;
        }

        return response()->json($res);

    }


}