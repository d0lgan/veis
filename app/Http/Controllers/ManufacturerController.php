<?php

namespace App\Http\Controllers;

use App\Document;
use App\GroupAttribute;
use App\Contact;
use App\Order;
use App\Language;
use App\Manufacturer;
use Illuminate\Http\Request;
use App\Page;
use DB;
use App\Product;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class ManufacturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
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

        $manufacturers = Manufacturer::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.manufacturer.index', compact('manufacturers', 'order_count', 'contacts_count'));
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
        $manufacturer = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.manufacturer.create', compact('manufacturer', 'langs', 'order_count', 'contacts_count'));
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

        $manufacturer = new Manufacturer;
        $manufacturer->title_ru = $request->title_ru;
        $manufacturer->title_uk = $request->title_uk;
        if (empty($manufacturer->meta_h1_ru)) {
            $manufacturer->meta_h1_ru = $manufacturer->title_ru;
        } else {
            $manufacturer->meta_h1_ru = $request->meta_ru;
        }

        if (empty($manufacturer->meta_h1_uk)) {
            $manufacturer->meta_h1_uk = $manufacturer->title_uk;
        } else {
            $manufacturer->meta_h1_uk = $request->meta_uk;
        }

        if ($request->slug_ru) {
            $manufacturer->slug_ru = $request->slug_ru;
        }

        if ($request->slug_uk) {
            $manufacturer->slug_uk = $request->slug_uk;
        }

        $manufacturer->link_ru = $request->link_ru;
        $manufacturer->link_uk = $request->link_uk;
        $manufacturer->sort = $request->sort;
        $manufacturer->description_ru = $request->description_ru;
        $manufacturer->description_uk = $request->description_uk;
        $manufacturer->seo_ru = $request->seo_ru;
        $manufacturer->seo_uk = $request->seo_uk;


        //создаем изображение
        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';
            $image_name = $_FILES['image']['name'];
            Image::make($request->image)
                ->heighten(450, function ($constraint) {
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $manufacturer->image = $image_name;
        }
        $manufacturer->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'manufacturer',
                    'module_id' => $manufacturer->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, ''),
                ]);
            }

        }

        return back()
            ->withInput()
            ->withErrors(array('info_messages' => 'Создан!'));
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

        $manufacturer = Manufacturer::find($id);

        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'description' => Document::get('manufacturer', 'description', $manufacturer->id, $lang->locate_code),
                'title' => Document::get('manufacturer', 'title', $manufacturer->id, $lang->locate_code),
                'meta' => Document::get('manufacturer', 'meta', $manufacturer->id, $lang->locate_code),
                'seo' => Document::get('manufacturer', 'seo', $manufacturer->id, $lang->locate_code)
            ];
        }
        $manufacturer->data = $arr;
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.manufacturer.edit', compact('manufacturer', 'langs', 'order_count', 'contacts_count'));
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
        $manufacturer = Manufacturer::find($id);
        $manufacturer->title_ru = $request->title_ru;
        $manufacturer->title_uk = $request->title_uk;
        $manufacturer->meta_h1_ru = $request->meta_ru;
        $manufacturer->meta_h1_uk = $request->meta_uk;
        $manufacturer->link_ru = $request->link_ru;
        $manufacturer->link_uk = $request->link_uk;
        $manufacturer->sort = $request->sort;
        $manufacturer->description_ru = $request->description_ru;
        $manufacturer->description_uk = $request->description_uk;
        $manufacturer->seo_ru = $request->seo_ru;
        $manufacturer->seo_uk = $request->seo_uk;

        if ($request->slug_ru) {
            $manufacturer->slug_ru = $request->slug_ru;
        }

        if ($request->slug_uk) {
            $manufacturer->slug_uk = $request->slug_uk;
        }

        if($request->del){
            if($manufacturer->image){
                $file = public_path() . '/house/uploads/' . $manufacturer->image;
                if(File::exists($file)) {
                    File::delete($file);
                }
                $manufacturer->image = null;
            }
        }

        //создаем изображение
        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';
            $image_name = $_FILES['image']['name'];
            Image::make($request->image)
                ->heighten(450, function ($constraint) {
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $manufacturer->image = $image_name;
        } else {
            $manufacturer->image = $manufacturer->image;
        }
        $manufacturer->save();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'meta', 'seo'];


            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    ['module' => 'manufacturer',
                        'module_id' => $manufacturer->id,
                        'lang' => $lang->locate_code,
                        'type' => $document]
                    , [
                    'content' => request($content, '')
                ]);
            }


        }

        return redirect()->route('admin-manufacturers-index');
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
        $manufacturer = Manufacturer::find($id);
        Document::where('module_id', $manufacturer->id)->where('module', 'manufacturer')->delete();
        $manufacturer->delete();

        return back()->withMessage('Manufacturer Delete');
    }
}
