<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Contact;
use App\Order;
use App\Document;
use App\Language;
use Illuminate\Http\Request;

class BrandController extends Controller
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

    public function indexAdmin(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);


        $brands = Brand::all();
        $orders        = Order::all();
        $order_count   = $orders->count();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();



        return view('admin.brand.index', compact('brands', 'order_count', 'contacts_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = Language::all();
        $brand = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.brand.create', compact('brand', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand;
        $brand->title_ru = $request->title_ru;
        $brand->title_uk = $request->title_uk;
        $brand->link_ru = $request->link_ru;
        $brand->link_uk = $request->link_uk;
        $brand->sort = $request->sort;
        $brand->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'brand',
                    'module_id' => $brand->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, ''),
                ]);
            }

        }

        return redirect()
            ->route('admin-brands-index')
            ->withErrors('Создано');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        $langs = Language::all();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('brand', 'title', $brand->id, $lang->locate_code)
            ];
        }
        $brand->data = $arr;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.brand.edit', compact('brand', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $langs = Language::all();
        $brand->title_ru = $request->title_ru;
        $brand->title_uk = $request->title_uk;
        $brand->link_ru = $request->link_ru;
        $brand->link_uk = $request->link_uk;
        $brand->sort = $request->sort;
        $brand->save();

        foreach ($langs as $lang) {

            $documents = ['title'];


            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    ['module' => 'brand',
                        'module_id' => $brand->id,
                        'lang' => $lang->locate_code,
                        'type' => $document]
                    , [
                    'content' => request($content, '')
                ]);
            }


        }

        return redirect()
            ->route('admin-brands-index')
            ->withErrors('Обновлено');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        Document::where('module_id', $brand->id)->where('module', 'brand')->delete();
        $brand->delete();

        return redirect()->route('admin-brands-index');
    }
}
