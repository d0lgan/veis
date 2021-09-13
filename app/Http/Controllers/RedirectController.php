<?php

namespace App\Http\Controllers;

use App\Attribute;
use App\Category;
use App\Contact;
use App\Document;
use App\Language;
use App\Manufacturer;
use App\Order;
use App\Product;
use App\Redirect;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class RedirectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index($slug)
    {
        $page = DB::table('pages')
            ->where('type', 'manufacturer')
            ->first();
        $manufacturer = Manufacturer::whereSlug($slug)->firstOrFail();
        pagetitle($manufacturer->meta_h1);

        $products = Product::filter(\Request::input('filter', []))
            ->where('manufacturer_id', '=', $manufacturer->id)
            ->paginate(12);


        if (!$products->isEmpty()) {
            foreach ($manufacturer->products as $product) {
                $groupsAttributes = $product->category->group_attributes;
            }
        } else {
            $groupsAttributes = [];
        }

        return view('site.manufacturer', compact('manufacturer', 'page', 'products', 'manufacturers', 'groupsAttributes'));
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

        $redirects = Redirect::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.redirect.index', compact('redirects', 'order_count', 'contacts_count'));
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
        $langs = Language::all();
        $redirect = null;

        $attributes = Attribute::get()->toArray();
        foreach ($attributes as $key => $attribute) {
            $attribute += ['title' => $attribute['name_ru']];
            $attributes[$key] = $attribute;
        }

        $categories_json = Category::select(['id', 'title_ru'])->get();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.redirect.create', compact('redirect', 'attributes', 'langs', 'order_count', 'contacts_count', 'categories_json'));
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
            /*'title' => 'required',
            'description' => 'required',
            'image' => 'required',*/
        ]);

        $redirect = new Redirect();
        $redirect->title_ru = $request->title_ru;
        $redirect->title_uk = $request->title_uk;

        $redirect->meta_h1_ru = $request->meta_ru;

        $redirect->meta_h1_uk = $request->meta_uk;

        if ($request->slug_ru) {
            $redirect->slug_ru = $request->slug_ru;
        }

        if ($request->slug_uk) {
            $redirect->slug_uk = $request->slug_uk;
        }
        $redirect->category_id = $request->category_id;
        $redirect->page = $request->page;
        $redirect->description_ru = $request->description_ru;
        $redirect->description_uk = $request->description_uk;
        $redirect->seo_ru = $request->seo_ru;
        $redirect->seo_uk = $request->seo_uk;


        $redirect->save();

        foreach (json_decode($request->categories) as $attr) {
            $redirect->attributes()->syncWithoutDetaching($attr->id);
        }

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'redirect',
                    'module_id' => $redirect->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, ''),
                ]);
            }

        }

        return redirect()
            ->route('admin-redirects-index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $redirect = Redirect::find($id);

        $attributes = Attribute::get()->toArray();
        foreach ($attributes as $key => $attribute) {
            $attribute += ['title' => $attribute['name_ru']];
            $attributes[$key] = $attribute;
        }

        $tags = Tag::get()->toArray();

        $categories_json = Category::select(['id', 'title_ru'])->get();
        $langs = Language::all();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'description' => Document::get('redirect', 'description', $redirect->id, $lang->locate_code),
                'title' => Document::get('redirect', 'title', $redirect->id, $lang->locate_code),
                'meta' => Document::get('redirect', 'meta', $redirect->id, $lang->locate_code),
                'seo' => Document::get('redirect', 'seo', $redirect->id, $lang->locate_code)
            ];
        }
        $redirect->data = $arr;
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.redirect.edit', compact('redirect', 'attributes', 'tags', 'langs', 'order_count', 'contacts_count', 'categories_json'));
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
        $langs = Language::all();
        $redirect = Redirect::find($id);
        $redirect->title_ru = $request->title_ru;
        $redirect->title_uk = $request->title_uk;
        $redirect->meta_h1_ru = $request->meta_ru;
        $redirect->meta_h1_uk = $request->meta_uk;
        $redirect->category_id = $request->category_id;
        $redirect->page = $request->page;
        $redirect->sail = $request->sail;
        $redirect->description_ru = $request->description_ru;
        $redirect->description_uk = $request->description_uk;
        $redirect->seo_ru = $request->seo_ru;
        $redirect->seo_uk = $request->seo_uk;

        foreach (json_decode($request->categories) as $attr) {
            $redirect->attributes()->syncWithoutDetaching($attr->id);
        }

        foreach (json_decode($request->tags) as $tag) {
            $redirect->tags()->syncWithoutDetaching($tag->id);
        }


        if ($request->slug_ru) {
            $redirect->slug_ru = $request->slug_ru;
        }

        if ($request->slug_uk) {
            $redirect->slug_uk = $request->slug_uk;
        }



        $redirect->save();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];


            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    ['module' => 'redirect',
                        'module_id' => $redirect->id,
                        'lang' => $lang->locate_code,
                        'type' => $document]
                    , [
                    'content' => request($content, '')
                ]);
            }


        }

        return redirect()->route('admin-redirects-index');
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
        $redirect = Redirect::find($id);
        Document::where('module_id', $redirect->id)->where('module', 'redirect')->delete();
        $redirect->delete();

        return back()->withMessage('Manufacturer Delete');
    }
}
