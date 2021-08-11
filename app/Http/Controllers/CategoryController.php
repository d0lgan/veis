<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Document;
use App\GroupAttribute;
use App\Category;
use App\Language;
use App\Option;
use App\Setting;
use App\Tag;
use DB;
use Illuminate\Http\Request;
use App\Page;
use App\Contact;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\ImageManagerStatic as Image;
use App\Manufacturer;

class CategoryController extends Controller
{


    public function index($slug)
    {
        $translate = [
            'from' => Lang::trans('filter.from'),
            'manufacturers' => Lang::trans('filter.manufacturers'),
            'price' => Lang::trans('filter.price'),
            'apply' => Lang::trans('filter.apply'),
            'count_to_page' => Lang::trans('filter.count_to_page'),
            'to_cart' => Lang::trans('filter.to_cart')
        ];
        $locale = App::getLocale();
        $page = DB::table('pages')->where('type', 'category')->first();
        $category = Category::whereSlug_ru($slug)->firstOrFail();
        $category->title = Document::get('category', 'title', $category->id, $locale);
        $categories = Category::all();
        pagetitle($category->meta_h1);

        $settings = Setting::first();
        $tmp_prod = $category->products()->where('public', 1)->get();

        foreach ($categories as $cat){
            $arr = [];

            $arr[$locale] = [
//                'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                'title' => Document::get('category', 'title', $cat->id, $locale),
                /*'meta' => Document::get('product', 'meta', $product->id, $locale),
                'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')*/
            ];
            $cat->data = $arr;
        }

        $count_p = $category->products->count();
        $products = $category->products()->where('public', 1)->take(10)->get();

        foreach ($products as $product){

            $arr = [];
            $arr[$locale] = [
//                'desc' => trim(Document::get('product', 'description', $product->id, $locale), '<p></p>'),
                'title' => Document::get('product', 'title', $product->id, $locale),
                'meta' => Document::get('product', 'meta', $product->id, $locale)
                /*'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>')*/
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
            $product->galleries = $product->galleries()->get();
            $product->description = trim($product->description, '<p></p>');

            $group_attributes = null;
            $select_attributes = null;


            $product->load(['attributes.group_attribute' => function ($items) use (&$group_attributes) {
                $group_attributes = $items->where('public', 1)->get();
            }]);

            $product->load(['attributes' => function ($items) use (&$select_attributes) {
                $select_attributes = $items->get();
            }]);
            $selected_attr = [];
            if ($group_attributes != null) {
                foreach ($group_attributes as $key => $a) {

                    $selected_attr[$key]['title'] = Document::get('group_attribute', 'title', $a->id, $locale);
                    $selected_attr[$key]['id'] = $a->id;
                    foreach ($a->attributes as $attr) {
                        $selected_attr[$key]['params'][] = $attr;
                        for ($i = 0; $i < count($select_attributes); $i++) {
                            if ($select_attributes[$i]->id == $attr->id) {
                                $selected_attr[$key]['selected'][] = $select_attributes[$i]->id;
                            }
                        }
                    }


                }
            }

            $product->selected_attr = $selected_attr;
            $product->tags;
            $product->relations;

        }

        $tmp_tags = [];
        $tmp_group = [];
        $tmp_a = [];
        $tmp_man = [];

        foreach ($tmp_prod as $product){
            $group_attributes = null;
            $select_attributes = null;

            if(!in_array($product->manufacturer_id, $tmp_man)){
                $tmp_man[] = $product->manufacturer_id;
            }


            $product->load(['attributes.group_attribute' => function ($items) use (&$group_attributes) {
                $group_attributes = $items->where('public', 1)->get();
            }]);

            $product->load(['attributes' => function ($items) use (&$select_attributes) {
                $select_attributes = $items->get();
            }]);

            $selected_attr = [];
            if ($group_attributes != null) {
                foreach ($group_attributes as $key => $a) {
                    $selected_attr[$key]['name'] = $a->name;
                    $selected_attr[$key]['id'] = $a->id;
                    if(!in_array($a->id, $tmp_group)){
                        $tmp_group[] = $a->id;
                    }
                    foreach ($a->attributes as $attr) {
                        $selected_attr[$key]['params'][] = $attr;
                        for ($i = 0; $i < count($select_attributes); $i++) {
                            if ($select_attributes[$i]->id == $attr->id) {
                                $selected_attr[$key]['selected'][] = $select_attributes[$i]->id;
                                if(!in_array($select_attributes[$i]->id, $tmp_a)){
                                    $tmp_a[$a->id][] = $select_attributes[$i]->id;
                                }
                            }
                        }
                    }


                }
            }
            $product->selected_attr = $selected_attr;
            $product->tags;

            foreach ($product->tags as $tag){
                if(!in_array($tag->id, $tmp_tags)){
                    $tmp_tags[] = $tag->id;
                }
            }

        }

        $tags = Tag::whereIn('id', $tmp_tags)->get();

        foreach ($tags as $tag){
            $tag->title = Document::get('tag', 'title', $tag->id, $locale);
        }

        $manufacturers = Manufacturer::whereIn('id', $tmp_man)->get();

        foreach ($manufacturers as $manufacturer){
            $manufacturer->title = Document::get('manufacturer', 'title', $manufacturer->id, $locale);
        }
        $groupsAttributes = GroupAttribute::whereIn('id', $tmp_group)->get();
        for($i = 0;$i < count($groupsAttributes);$i++){
            $groupsAttributes[$i]->title = Document::get('group_attribute', 'title', $groupsAttributes[$i]->id, $locale);
            $groupsAttributes[$i]->attributes = Attribute::whereIn('id', $tmp_a[$groupsAttributes[$i]->id])->get();
            foreach ($groupsAttributes[$i]->attributes as $attribute){
                $attribute->title = Document::get('attribute', 'title', $attribute->id, $locale);
            }
        }
//        dd($groupsAttributes);

        return view('site.category', compact('category', 'page', 'products', 'manufacturers', 'groupsAttributes', 'categories', 'tags', 'locale', 'settings', 'count_p', 'translate'));
    }

    /*public function SiteMapsIndex()
    {
        $pages = Page::all();
        $page = DB::table('pages')->where('type', 'sitemaps')->first();
        pagetitle($page->meta_h1);

        $categories = Category::where('parent_id', '=', 0)->get();

        return view('site.sitemaps', compact('categories', 'pages'));
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);

        $categories = Category::with('parent')->get();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();


        return view('admin.category.index', compact('categories', 'order_count', 'contacts_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);

        $categories = Category::get()->pluck('title_ru', 'id')->prepend('Выбрать', 0);
        $category = null;

        $langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.category.create', compact('categories', 'langs', 'category', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'slug_ru' => 'nullable|unique:products',
            'slug_uk' => 'nullable|unique:products',
        ]);


        $category = new Category;
        $category->title_ru = $request->title_ru;
        $category->title_uk = $request->title_uk;
        if ($request->slug_ru) {
            $category->slug_ru = $request->slug_ru;
        }
        if ($request->slug_uk) {
            $category->slug_uk = $request->slug_uk;
        }
        $category->meta_h1_ru = $request->meta_ru;
        $category->meta_h1_uk = $request->meta_uk;
        $category->seo_ru = $request->seo_ru;
        $category->seo_uk = $request->seo_uk;
        $category->sort = $request->sort;
        $category->description_ru = $request->description_ru;
        $category->description_uk = $request->description_uk;
        $category->parent_id   = $request->parent_id;
        $category->at_home = $request->at_home;

        //создаем изображение
        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';

            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'category_' . time() . '.' . $img_type[1];
            Image::make($request->image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $category->image = $image_name;
        }

        $category->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'category',
                    'module_id' => $category->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect()->route('admin-categories-index')->with('success', 'Категория успешно сохранена');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);

        $categories = Category::get()
            ->pluck('title_ru', 'id')
            ->prepend('Выбрать', 0);
        
        $attributes = Attribute::get()->toArray();
        foreach ($attributes as $key => $attribute) {
            $attribute += ['title' => $attribute['name_ru']];
            $attributes[$key] = $attribute;
        }

        $langs = Language::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        $category = Category::find($id);
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'description' => Document::get('category', 'description', $category->id, $lang->locate_code),
                'title' => Document::get('category', 'title', $category->id, $lang->locate_code),
                'meta' => Document::get('category', 'meta', $category->id, $lang->locate_code),
                'seo' => Document::get('category', 'seo', $category->id, $lang->locate_code)
            ];
        }
        $category->data = $arr;

        //dd($category);


        return view('admin.category.edit', compact('category', 'langs', 'categories', 'order_count', 'contacts_count', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'slug_ru' => 'nullable|unique:products',
            'slug_uk' => 'nullable|unique:products',
        ]);

        $category = Category::find($id);
        $category->title_ru = $request->title_ru;
        $category->title_uk = $request->title_uk;
        $category->meta_h1_ru = $request->meta_ru;
        $category->meta_h1_uk = $request->meta_uk;
        if ($request->slug_ru) {
            $category->slug_ru = $request->slug_ru;
        }
        if ($request->slug_uk) {
            $category->slug_uk = $request->slug_uk;
        }
        $category->sort = $request->sort;
        $category->seo_ru = $request->seo_ru;
        $category->seo_uk = $request->seo_uk;
        $category->description_ru = $request->description_ru;
        $category->description_uk = $request->description_uk;
        $category->parent_id   = $request->parent_id;
        $category->at_home = $request->at_home;

        foreach (json_decode($request->categories) as $attr) {
            $category->attributes()->syncWithoutDetaching($attr->id);
        }

        if($request->del){
            if($category->image){
                $file = public_path() . '/house/uploads/' . $category->image;
                if(File::exists($file)) {
                    File::delete($file);
                }
                $category->image = null;
            }
        }
        //создаем изображение
        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';
            $image_name = $_FILES['image']['name'];
            Image::make($request->image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $category->image = $image_name;
        }

        $category->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    ['module' => 'category',
                        'module_id' => $category->id,
                        'lang' => $lang->locate_code,
                        'type' => $document]
                    , [
                    'content' => request($content, '')
                ]);
            }


        }

        return redirect()->route('admin-categories-index')->with('success', 'Категория успешно обновлена');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->group_attributes()->detach();
        Document::where([
            ['module', 'category'],
            ['module_id', $category->id]
        ])->delete();
        $category->delete();

        return back()->withMessage('Categories Delete');
    }
}
