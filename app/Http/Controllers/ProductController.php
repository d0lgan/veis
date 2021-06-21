<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Comment;
use App\Currency;
use App\Document;
use App\GroupAttribute;
use App\Language;
use App\Option;
use App\Product;
use App\ProductOption;
use App\ProductValue;
use App\Stock;
use App\Supplier;
use App\ValueOption;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Page;
use DB;
use App\User;
use Cache;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Session;
use App\Cart;
use App\Order;
use Auth;
use App\Setting;
use App\Tag;
use App\Category;
use App\Contact;
use Event;
use App\Events\AddLogs;
use App\Gallery;
use App\Manufacturer;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\ImageManagerStatic as Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);
        $settings = Setting::first();
        $products = Product::with(['category', 'manufacturer', 'stock'])->take(10)->get();
        $count_p = Product::all()->count();
        $categories = Category::all();
        $manufacturers = Manufacturer::all();
        $stocks = Stock::all();

        $contacts = Contact::all();
        $contacts_count = $contacts->count();
        $orders = Order::all();
        $order_count = $orders->count();



        return view('admin.product.index', compact('products', 'categories', 'manufacturers', 'stocks', 'settings', 'count_p', 'order_count', 'contacts_count'));
    }


    // Export
    public function indexExport(Request $request)

    {
        set_time_limit(120);
        //Экспорт
        // $request->user()->authorizeRoles(['admin']);

        // $products = Product::with(['category', 'manufacturer',])->take(10)->get();
        // $products = Product::(['price', 'manufacturer',])->take(10)->get();

//    header('Content-Type: application/octet-stream');
//    header('Content-Disposition: attachment; filename="export-' . date('Y-m-d H_i_s') . '.xml"');
        $lang = 'uk';
        $lang = 'ru';
        // ?lang=ru ?lang=uk
        if (!empty($_GET['lang']) && in_array($_GET['lang'], ['ru', 'uk'])) $lang = $_GET['lang'];

        ob_start();
        echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE yml_catalog SYSTEM "shops.dtd">
<yml_catalog date="2021-03-04 23:15">
    <shop>
        <name>Магазин</name>
        <company>Магазин</company>
        <url>https://' . $_SERVER['HTTP_HOST'] . '</url>
        <platform>selfmade</platform>
        <currencies>
            <currency id="UAH" rate="3.030303030303" />
        </currencies>
        <categories>
            ';
        Category::chunk(20, function ($arr) use ($lang) {
            foreach ($arr as $v) {
                $t = htmlspecialchars($v->{"title_{$lang}"}/*,ENT_XML1*/);
                echo "<category id=\"{$v->id}\">{$t}</category>\n";
            }
        });
        // <category id="new">Новинки</category>
        echo '
        </categories>
        <offers>
';
        $host = $_SERVER['HTTP_HOST'];
        $https = (!empty(@$_SERVER['HTTPS']) && @$_SERVER['HTTPS'] !== 'off') || @$_SERVER['SERVER_PORT'] == 443;
        $https = $https ? 'https' : 'http';
        $base_url = "{$https}://{$host}/product/";
        $image_base_url = "{$https}://{$host}/house/uploads/";

        Product::with(['category', 'manufacturer', 'galleries', 'attributes',])->chunk(20, function ($arr) use ($lang, $base_url, $image_base_url) {
            echo "\n";
            foreach ($arr as $p) {
                $offer = new \SimpleXMLElement('<offer/>');
                // https://support.prom.ua/hc/ru/articles/360004963578
                $offer->addAttribute("id", $p->id);
                $offer->addAttribute("available", ($p->availability == "1") ? "true" : "false");
                $offer->addAttribute("selling_type", "r");
                $offer->addChild("url", $base_url . $p->{"slug_{$lang}"});
                $offer->addChild("price", $p->price);
                if ($p->undiscounted) {
                    $offer->addChild("oldprice", $p->undiscounted);
                }
                $offer->addChild("currencyId", "UAH");
                // $offer->addChild("categoryId", "new");
                if ($p->category) {
                    $offer->addChild("categoryId", "" . $p->category->id);
                } else {
                    $offer->addChild("categoryId", "cat");
                }
                $convertimage = function($image){
                    // если оно не webp возврат
                    if(!$image || !preg_match('#\\.webp$#i', $image) ) return $image;
                    // если она webp, то конвертируем и выдаем
                    $image_file_path = realpath(__DIR__.'/../../../public/house/uploads/' . $image);
                    if(!$image_file_path)return null;
                    // дальше только если картинка есть, её ведь может и не быть!
                    $image_file_path_converted = $image_file_path.'.jpg'; // путь к картинке.webp.jpg
                    if(false && file_exists($image_file_path_converted)){

                        // ура, файл уже есть!
                        return $image . '.jpg';
                    }
                    // если конвертированного файла нет, конвертируем
                    // после конвертации (или если файл был) выдаем на него ссылку
                    $im = imagecreatefromwebp($image_file_path);
                    imagejpeg($im, $image_file_path_converted, 90);
                    imagedestroy($im);
                    return $image . '.jpg';
                };
                if ($img=$convertimage($p->image)){
                    $offer->addChild("picture", $image_base_url . $img);
                }
                if($p->galleries){
                    foreach ($p->galleries as $gallery) {
                        if ($img=$convertimage($gallery->name)){
                            $offer->addChild("picture", $image_base_url . $img);
                        }
                    }
                }
                // <param name="Выбрать цвет">Бежевый</param>
                // <param name="Выбрать размер">42</param>
                // <param name="Материал">шелк</param>
                // <param name="Артикул">062_283913</param>
                foreach ($p->attributes as $attribute) {
                    // $offer->addChild("picture", $image_base_url . $gallery->name);
                    $param = $offer->addChild("param", $attribute->{"name_{$lang}"});
                    $param->addAttribute("name",
                        $attribute->group_attribute->{"title_{$lang}"}
                    );
                }
                // with images??
                if ($p->vendor_code) $offer->addChild("vendorCode", $p->vendor_code);
                $offer->addChild("name", $p->{"title_{$lang}"});
                $offer->addChild("description", html_entity_decode(strip_tags($p->{"description_{$lang}"})));
                $xmlText = html_entity_decode($offer->asXML(), ENT_NOQUOTES, 'UTF-8'); // asXML/saveXML
                list(, $xmlText) = explode('?>', $xmlText, 2);
                $xmlText = trim($xmlText);
                echo $xmlText;
                // $p->{"title_{$lang}"};
            }
        });
        echo '
</offers>
    </shop>
</yml_catalog>
';
        $c = ob_get_contents();
        ob_end_clean();
        return response($c, 200)->header('Content-Type', 'application/octet-stream')->header('Content-Disposition', 'attachment; filename="export-' . date('Y-m-d H_i_s') . '.xml"');
    }



    public function postProductComment(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'com_text' => 'required|max:255',
        ]);

        $product = Product::find($id);
        $comment = new Comment;
        $comment->com_text = $request->com_text;
        $comment->product_id = $product->id;
        $comment->user_id = Auth::id();
        $comment->name = $request->name;
        $comment->email = $request->email;

        $comment->save();

        return back()
            ->withInput()
            ->withErrors(array('info_messages' => 'Комментарий добавлен!'));
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

        $categories_json = Category::select(['id', 'title_ru'])->get();

        $categories = Category::get()->pluck('title_ru', 'id');
        $settings = Setting::first();
        $options = Option::with('values')->get();
        $tags = Tag::all();

        $manufacturers = Manufacturer::get()->pluck('title_ru', 'id');
        $stocks = Stock::get()->pluck('title_ru', 'id');
        $suppliers = Supplier::get()->pluck('title', 'id');
//        $tags = Tag::get()->pluck('name', 'id');
        $group_attributes = GroupAttribute::all();

        /*foreach ($group_attributes as $group) {
            $group->title = $group->title_ru;
        }*/
        $langs = Language::all();
        $currencies = Currency::all();
        $product = null;

        $contacts = Contact::all();
        $contacts_count = $contacts->count();
        $orders = Order::all();
        $order_count = $orders->count();
//dd($tags);

        return view('admin.product.create', compact('categories', 'langs', 'product', 'categories_json', 'tags', 'stocks', 'manufacturers', 'suppliers', 'group_attributes', 'currencies', 'tags', 'options', 'settings', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'price' => 'required',
            'manufacturer_id' => 'required',
            'category_id' => 'required',
            'slug_ru' => 'nullable|unique:products',
            'slug_uk' => 'nullable|unique:products',
        ]);

        $res = json_decode($request->categories);
        $gallery = json_decode($request->gallery);
        $image = json_decode($request->image);


        if (!empty($image->tmp_name)) {
            $file = public_path() . '/house/uploads/' . $image->tmp_name;
            if (File::exists($file)) {
                File::delete($file);
            }
        }

        // dd(__METHOD__, $request->all(), $res, $gallery, $image);

        $product = new Product;
        $product->title_ru = $request->title_ru;
        $product->title_uk = $request->title_uk;

        if ($request->slug_ru) {
            $product->slug_ru = $request->slug_ru;
        }

        if ($request->slug_uk) {
            $product->slug_uk = $request->slug_uk;
        }

        if (empty($request->meta_ru)) {
            $product->meta_h1_ru = $product->title_ru;
        } else {
            $product->meta_h1_ru = $request->meta_ru;
        }

        if (empty($request->meta_uk)) {
            $product->meta_h1_uk = $product->title_uk;
        } else {
            $product->meta_h1_uk = $request->meta_uk;
        }

        if ($request->type_stock == 'percent' && $request->stock !== null) {
            $product->price_stock = $request->price - ceil($request->price * $request->stock / 100);

        } else {
            $product->price_stock = $request->stock;
        }

        $product->stock = $request->stock;
        $product->type_stock = $request->type_stock;
        if (time() > strtotime($request->start_stock) && time() < strtotime($request->end_stock) && $request->stock > 0) {
            $product->status_stock = true;
        } else {
            $product->status_stock = false;
        }

        $product->start_stock = $request->start_stock;
        $product->end_stock = $request->end_stock;

        $product->seo = $request->seo_ru;
        $product->price = $request->price;
        $product->stock_id = $request->stock_id;
        $product->how_size_ru = $request->how_size_ru;
        $product->how_size_uk = $request->how_size_uk;
        $product->category_id = $request->category_id;
        $product->category_title = Category::find($request->category_id)->title_ru;
        $product->undiscounted = $request->undiscounted;
        $product->vendor_code = $request->vendor_code;
        $product->ude = $request->ude;
        $product->course = $request->course;
        $product->percent = $request->percent;
        $product->lens_height = $request->lens_height;
        $product->lens_width = $request->lens_width;
        $product->bridge_width = $request->bridge_width;
        $product->long_arms = $request->long_arms;
        $product->frame_width = $request->frame_width;
        $product->availability = $request->availability;
        $product->type = $request->type;
        $product->model = $request->model;
        $product->supplier = $request->supplier;
        $product->description_ru = trim($request->description_ru, '<p></p>');
        $product->description_uk = trim($request->description_uk, '<p></p>');
        $product->public = $request->public;
        $product->alt = $image->alt;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->manufacturer_title = Manufacturer::find($request->manufacturer_id)->title_ru;


        if ($request->how_size_image) {
            $destinationPath = public_path() . '/house/uploads/';

            $path_name_parts = pathinfo($_FILES['how_size_image']['name']);
            $img_type = explode("/", $_FILES['how_size_image']['type']);

            $image_name = $path_name_parts['filename'] . '_how_size_product_' . time() . '.' . $img_type[1];
            Image::make($request->how_size_image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $product->how_size = $image_name;
        }

        //создаем изображение
        if ($image->name) {
            $product->image = $image->name;
        }

        $product->save();


        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo', 'additional', 'additional_title', 'how_size'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'product',
                    'module_id' => $product->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, ''),
                ]);
            }

        }

        if ($request->price_option) {
            $values = [];
    
            for ($i = 0; $i < count($request->price_option); $i++) {
    
                $product_value = ProductValue::with('valueOption')->create([
                    'price_option' => $request->price_option[$i],
                    'operation_option' => $request->operation_option[$i],
                    'value_option_id' => $request->value_option[$i],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
                $values[] = $product_value->id;
            }
            
            $product->productValues()->attach($values);
        }


        if (!empty($gallery[0]->name)) {
            for ($i = 0; $i < count($gallery); $i++) {
                if (!$gallery[$i]->sort) {
                    $gallery[$i]->sort = 0;
                }
                Gallery::create([
                    'name' => $gallery[$i]->name,
                    'sort' => $gallery[$i]->sort,
                    'alt' => $gallery[$i]->alt,
                    'product_id' => $product->id
                ]);
            }

        }


        //заись в сводную таблицу
        $product->attributes()->attach($request->attribute_id);

        //запись в сводную таблицу
        $product->tags()->attach($request->tag_id);

        $mainCat = false;
        if ($res) {
            foreach ($res as $r) {
                if ($r->id == $request->category_id) {
                    $mainCat = true;
                }
                $product->categories()->syncWithoutDetaching($r->id);

            }
        }


        if (!$mainCat) {
            $product->categories()->syncWithoutDetaching($request->category_id);
        }














        return redirect()->route('admin-products-index')->with('success', 'Товар успешно сохранен!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $translate = [
            'to_cart' => Lang::trans('product.to_cart'),
            'manufacturer' => Lang::trans('product.manufacturer'),
            'category' => Lang::trans('product.category'),
            'back' => Lang::trans('product.back'),
            'options' => Lang::trans('product.options'),
            'most_option' => Lang::trans('product.most_option'),
            'attributes' => Lang::trans('product.attributes'),
            'desc' => Lang::trans('product.desc'),
            'added_to_cart' => Lang::trans('product.added_to_cart'),
            'select_options' => Lang::trans('product.select_options'),
            'availability' => Lang::trans('product.availability'),
            'no_availability' => Lang::trans('product.no_availability'),
            'yes_availability' => Lang::trans('product.yes_availability'),
            'select' => Lang::trans('product.select'),
            'free_shipping' => Lang::trans('product.free_shipping'),
            'glasses' => Lang::trans('product.glasses'),
            'lens_height' => Lang::trans('product.lens_height'),
            'lens_width' => Lang::trans('product.lens_width'),
            'bridge_width' => Lang::trans('product.bridge_width'),
            'long_arms' => Lang::trans('product.long_arms'),
            'frame_width' => Lang::trans('product.frame_width'),

        ];
        $translate_watch = [
            'show_all' => Lang::trans('watched.show_all'),
            'watched' => Lang::trans('watched.watched')
        ];
        $pages = Page::all();
        $page = DB::table('pages')->where('type', 'product')->first();
        $locale = App::getLocale();
        $product = Product::where('slug_ru', $slug)->firstOrFail();
        pagetitle($product->meta_h1);
        $langs = Language::all();

        $page->title = Document::get('page', 'title', $page->id, $locale);
        $page->description = Document::get('page', 'desc', $page->id, $locale);
        $arr = [];
        $arr[$locale] = [
            'desc' => trim(Document::get('product', 'desc', $product->id, $locale), '<p></p>'),
            'title' => Document::get('product', 'title', $product->id, $locale),
            'meta' => Document::get('product', 'meta', $product->id, $locale),
            'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>'),
            'additional' => trim(Document::get('product', 'additional', $product->id, $locale), '<p></p>'),
            'additional_title' => Document::get('product', 'additional_title', $product->id, $locale),
            'how_size' => Document::get('product', 'how_size', $product->id, $locale),
        ];

        //$product->category_title = Document::get('category', 'title', $product->category_id, $locale);
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
            $group_attributes = $items->get();
        }]);

        $product->load(['attributes' => function ($items) use (&$select_attributes) {
            $select_attributes = $items->get();
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

        //dd($product, $group_attributes, $select_attributes, $selected_attr);

        return view('site.product', compact('product', 'pages', 'page', 'locale', 'selected_attr', 'settings', 'translate', 'translate_watch'));

    }


    public function shownew($slug)
    {
        $translate = [
            'catalog' => Lang::trans('site.footer.catalog'),

            'to_cart' => Lang::trans('product.to_cart'),
            'manufacturer' => Lang::trans('product.manufacturer'),
            'category' => Lang::trans('product.category'),
            'back' => Lang::trans('product.back'),
            'most_option' => Lang::trans('product.most_option'),
            'attributes' => Lang::trans('product.attributes'),
            'added_to_cart' => Lang::trans('product.added_to_cart'),
            'select_options' => Lang::trans('product.select_options'),
            'availability' => Lang::trans('product.availability'),
            'no_availability' => Lang::trans('product.no_availability'),
            'yes_availability' => Lang::trans('product.yes_availability'),
            'select' => Lang::trans('product.select'),
            'free_shipping' => Lang::trans('product.free_shipping'),
            'glasses' => Lang::trans('product.glasses'),
            'lens_height' => Lang::trans('product.lens_height'),
            'lens_width' => Lang::trans('product.lens_width'),
            'bridge_width' => Lang::trans('product.bridge_width'),
            'long_arms' => Lang::trans('product.long_arms'),
            'frame_width' => Lang::trans('product.frame_width'),

            'store' => Lang::trans('product.store'),
            'gloves' => Lang::trans('product.gloves'),
            'auto' => Lang::trans('product.auto'),
            'man' => Lang::trans('product.man'),
            'price' => Lang::trans('site.productCard.price'),
            'watch' => Lang::trans('site.productCard.watch'),
            'buy' => Lang::trans('site.productCard.buy'),
            'viewed' => Lang::trans('site.productCard.viewed'),
            'sale' => Lang::trans('product.sale'),
            'remove' => Lang::trans('product.remove'),
            'choice' => Lang::trans('product.choice'),
            'options' => Lang::trans('product.options'),
            'color' => Lang::trans('product.color'),
            'size' => Lang::trans('product.size'),
            'pod' => Lang::trans('product.pod'),
            'desc' => Lang::trans('product.desc'),
            'free_del' => Lang::trans('product.free_del'),
            'free_del_text' => Lang::trans('product.free_del_text'),
            'guarantee' => Lang::trans('product.guarantee'),
            'more' => Lang::trans('product.more'),
            'guarantee_text' => Lang::trans('product.guarantee_text'),
            'about_prod' => Lang::trans('product.about_prod'),
            'add_info' => Lang::trans('product.add_info'),
            'free_consul_1' => Lang::trans('product.free_consul_1'),
            'free_consul_2' => Lang::trans('product.free_consul_2'),
            'reviews' => Lang::trans('product.reviews'),
            'leave_review' => Lang::trans('product.leave_review'),

        ];
        $translate_watch = [
            'show_all' => Lang::trans('watched.show_all'),
            'watched' => Lang::trans('watched.watched')
        ];
        $pages = Page::all();
        $page = DB::table('pages')->where('type', 'product')->first();
        $locale = App::getLocale();
        if ($locale == 'ru') {
            // Если находиться продукт с украинским слагом, но при этом locale русский, редиректит на правильный урл с русским слагом
            $product = Product::where('slug_uk', $slug)->first();
            if ($product) {
                return redirect('/ru/produce/' . $product->slug_ru);
            }

            $product = Product::where('slug_ru', $slug)->firstOrFail();
        } else if ($locale == 'uk') {
            //
            $product = Product::where('slug_ru', $slug)->first();
            if ($product) {
                return redirect('/produce/' . $product->slug_uk);
            }

            $product = Product::where('slug_uk', $slug)->firstOrFail();
        }
        pagetitle($product->meta_h1);
        $langs = Language::all();

        $page->title = Document::get('page', 'title', $page->id, $locale);
        $page->description = Document::get('page', 'desc', $page->id, $locale);
        $arr = [];
        $arr[$locale] = [
            'desc' => trim(Document::get('product', 'desc', $product->id, $locale), '<p></p>'),
            'title' => Document::get('product', 'title', $product->id, $locale),
            'meta' => Document::get('product', 'meta', $product->id, $locale),
            'seo' => trim(Document::get('product', 'seo', $product->id, $locale), '<p></p>'),
            'additional' => trim(Document::get('product', 'additional', $product->id, $locale), '<p></p>'),
            'additional_title' => Document::get('product', 'additional_title', $product->id, $locale),
            'how_size' => Document::get('product', 'how_size', $product->id, $locale),
        ];

        //$product->category_title = Document::get('category', 'title', $product->category_id, $locale);
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

        return view('site.produce', compact('product', 'pages', 'page', 'locale', 'selected_attr', 'settings', 'translate', 'translate_watch'));

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
        $currencies = Currency::all();
        $product = Product::find($id);
        $settings = Setting::first();
        $categories_json = Category::get();
        $categories = Category::get()->pluck('title', 'id');

        $contacts = Contact::all();
        $contacts_count = $contacts->count();
        $orders = Order::all();
        $order_count = $orders->count();

//        dd($product->start_stock);

        $manufacturers = Manufacturer::get()->pluck('title_ru', 'id');
        $stocks = Stock::get()->pluck('title_ru', 'id');
        $suppliers = Supplier::get()->pluck('title', 'id');

        $images = [];

        if ($product->image) {
            $images['main']['name'] = $product->image;
            $images['main']['tmp_name'] = '';
            $images['main']['alt'] = $product->alt;
        } else {
            $images['main']['name'] = '';
            $images['main']['tmp_name'] = '';
            $images['main']['alt'] = '';
        }
        $galleries = $product->galleries;

        if (!$galleries->isEmpty()) {
            for ($i = 0; $i < count($galleries); $i++) {
                $images['gallery'][$i]['name'] = $galleries[$i]->name;
                $images['gallery'][$i]['sort'] = $galleries[$i]->sort;
                $images['gallery'][$i]['alt'] = $galleries[$i]->alt;
            }

        } else {
            $images['gallery'][0]['name'] = '';
            $images['gallery'][0]['sort'] = '';
            $images['gallery'][0]['alt'] = '';
        }


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


        $group_attributes = null;
        $select_attributes = null;


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
        }
        $tags = Tag::all();

        $arr_tags = $product->tags()->get();
        $selected_tags = [];
        foreach ($arr_tags as $tag) {
            $selected_tags[] = $tag->id;
        }

        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'desc' => Document::get('product', 'desc', $product->id, $lang->locate_code),
                'title' => Document::get('product', 'title', $product->id, $lang->locate_code),
                'meta' => Document::get('product', 'meta', $product->id, $lang->locate_code),
                'seo' => Document::get('product', 'seo', $product->id, $lang->locate_code),
                'additional' => Document::get('product', 'additional', $product->id, $lang->locate_code),
                'additional_title' => Document::get('product', 'additional_title', $product->id, $lang->locate_code),
                'how_size' => Document::get('product', 'how_size', $product->id, $lang->locate_code),
            ];
        }
        $product->data = $arr;

        // ? 'categories'
        // ?? 'prod_tags'
        return view('admin.product.edit', compact('product', 'langs', 'categories_json', 'categories', 'tags', 'manufacturers', 'stocks', 'suppliers', 'group_attributes', 'currencies', 'options', 'selected', 'selected_attr', 'selected_tags', 'images', 'settings', 'contacts_count', 'order_count'));
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
            'price' => 'required',
            'manufacturer_id' => 'required',
            'category_id' => 'required',
        ]);

        $res = json_decode($request->categories);
        $gallery = json_decode($request->gallery);
        $image = json_decode($request->image);


        if (!empty($image->tmp_name)) {
            $file = public_path() . '/house/uploads/' . $image->tmp_name;
            if (File::exists($file)) {
                File::delete($file);
            }
        }


        $product = Product::find($id);

        if ($request->type_stock == 'percent' && $request->stock !== null) {
            $product->price_stock = $request->price - ceil($request->price * $request->stock / 100);

        } else {
            $product->price_stock = $request->stock;
        }

        $product->stock = $request->stock;
        $product->type_stock = $request->type_stock;
        if (time() > strtotime($request->start_stock) && time() < strtotime($request->end_stock) && $request->stock > 0) {

            $product->status_stock = true;
        } else {
            $product->status_stock = false;
        }

        $product->start_stock = $request->start_stock;
        $product->end_stock = $request->end_stock;

            // Meta info
        if (empty($request->meta_ru)) {
            $product->meta_h1_ru = $product->title_ru;
        } else {
            $product->meta_h1_ru = $request->meta_ru;
        }
        if (empty($request->meta_uk)) {
            $product->meta_h1_uk = $product->title_uk;
        } else {
            $product->meta_h1_uk = $request->meta_uk;
        }

            // Slug
        if ($request->slug_ru) {
            $product->slug_ru = $request->slug_ru;
        }
        if ($request->slug_uk) {
            $product->slug_uk = $request->slug_uk;
        }

        $product->title_ru = $request->title_ru;
        $product->title_uk = $request->title_uk;
        $product->seo = $request->seo_ru;
        $product->price = $request->price;
        $product->stock_id = $request->stock_id;
        $product->how_size_ru = $request->how_size_ru;
        $product->how_size_uk = $request->how_size_uk;
        $product->category_id = $request->category_id;
        $product->category_title = Category::find($request->category_id)->title_ru;
        $product->undiscounted = $request->undiscounted;
        $product->vendor_code = $request->vendor_code;
        $product->ude = $request->ude;
        $product->course = $request->course;
        $product->percent = $request->percent;
        $product->lens_height = $request->lens_height;
        $product->lens_width = $request->lens_width;
        $product->bridge_width = $request->bridge_width;
        $product->long_arms = $request->long_arms;
        $product->frame_width = $request->frame_width;
        $product->availability = $request->availability;
        $product->type = $request->type;
        $product->model = $request->model;
        $product->supplier = $request->supplier;
        $product->description_ru = trim($request->description_ru, '<p></p>');
        $product->description_uk = trim($request->description_uk, '<p></p>');
        $product->public = $request->public;
        $product->alt = $image->alt;
        $product->manufacturer_id = $request->manufacturer_id;
        $product->manufacturer_title = Manufacturer::find($request->manufacturer_id)->title_ru;


        if ($request->del_how_size) {
            if ($product->how_size) {
                $file = public_path() . '/house/uploads/' . $product->how_size;
                if (File::exists($file)) {
                    File::delete($file);
                }
                $product->how_size = null;
            }
        }

        if ($request->how_size_image) {
            if ($product->how_size) {
                $file = public_path() . '/house/uploads/' . $product->how_size;
                if (File::exists($file)) {
                    File::delete($file);
                }
                $product->how_size = null;
            }
            $destinationPath = public_path() . '/house/uploads/';

            $path_name_parts = pathinfo($_FILES['how_size_image']['name']);
            $img_type = explode("/", $_FILES['how_size_image']['type']);

            $image_name = $path_name_parts['filename'] . '_how_size_product_' . time() . '.' . $img_type[1];
            Image::make($request->how_size_image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $product->how_size = $image_name;
        }

        //создаем изображение
        if ($image->name) {
            $product->image = $image->name;
        }

        $product->save();

        if (!is_null($request->price_option)) {
            $product->productValues()->delete();
            $product->productValues()->detach();
            $values = [];
    
            for ($i = 0; $i < count($request->price_option); $i++) {
    
                $product_value = ProductValue::with('valueOption')->create([
                    'price_option' => $request->price_option[$i],
                    'operation_option' => $request->operation_option[$i],
                    'value_option_id' => $request->value_option[$i],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
                $values[] = $product_value->id;
            }
            
            $product->productValues()->attach($values);
        }
        
        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'desc', 'meta', 'seo', 'additional', 'additional_title', 'how_size'];


            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    ['module' => 'product',
                        'module_id' => $product->id,
                        'lang' => $lang->locate_code,
                        'type' => $document]
                    , [
                    'content' => request($content, '')
                ]);
            }


        }


        //заись в сводную таблицу
        $product->attributes()->sync($request->attribute_id);

        //запись в сводную таблицу product_tag
        $product->tags()->sync($request->tag_id);

        $product->categories()->detach();

        $mainCat = false;
        foreach ($res as $r) {
            if ($r->id == $request->category_id) {
                $mainCat == true;
            }
            $product->categories()->syncWithoutDetaching($r->id);

        }

        if (!$mainCat) {
            $product->categories()->syncWithoutDetaching($request->category_id);
        }
//dd($gallery);
        
        if (!empty($gallery[0]->name)) {
            for ($i = 0; $i < count($gallery); $i++) {
                $image = Gallery::where('name', $gallery[$i]->name)->first();
                if (!$gallery[$i]->sort) {
                    $gallery[$i]->sort = 0;
                }
                if (!$image) {
                    Gallery::create([
                        'name' => $gallery[$i]->name,
                        'sort' => $gallery[$i]->sort,
                        'alt' => $gallery[$i]->alt,
                        'product_id' => $product->id
                    ]);
                } else {
//                    dd($gallery[$i]['sort']);
                    $image->sort = intval($gallery[$i]->sort);
                    $image->alt = $gallery[$i]->alt;
                    $image->save();
                }
            }
        }

        /*Удаление выбраного изображения*/
        /*if ($request->product_gallery_id) {
            Gallery::destroy($request->product_gallery_id);
        }*/

        //Создаем событие
        $user = Auth::user();
        //Event::fire( new AddLogs( $product, $user ) );

        return back()
            ->withInput()
            ->with('success', 'Товар обновлен');
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
        $product = Product::find($id);
        $product->attributes()->detach();
        $product->categories()->detach();
        $product->productValues()->detach();
        $product->tags()->detach();
        $product->delete();

        return back()->withErrors(array('info_messages' => 'Товар удален!'));
        //echo $id;
    }

    public function favorite_add_del($id, Request $request)
    {

        $array = Session::get('favorites') ?? [];
        if (in_array($id, $array)) {
            if (($key = array_search($id, $array)) !== FALSE) {
                unset($array[$key]);
                Session::put('favorites', $array);
            }
        } else {
            Session::put('favorites', array_merge((array)$array, array($id)));
        }
        if ($request->ajax()) {
            return 'success';
        }

        return redirect()->back();
    }
}


