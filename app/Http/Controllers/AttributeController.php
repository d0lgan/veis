<?php

namespace App\Http\Controllers;

use App\Document;
use App\Language;
use Illuminate\Http\Request;
use App\GroupAttribute;
use App\Product;
use App\Contact;
use App\Order;
use App\Attribute;
use Illuminate\Support\Facades\DB;

class AttributeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);


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
        $attributes = Attribute::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.attribute.index', compact('attributes', 'order_count', 'contacts_count'));
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
        $attribute = null;
        $group_attributes = GroupAttribute::with('categories')->get();
        $langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
//        $group_attributes = GroupAttribute::pluck('name', 'id');

        return view('admin.attribute.create', compact('attribute', 'group_attributes', 'langs', 'order_count', 'contacts_count'));
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
//        dd($request);
        $attribute = new Attribute;
        $attribute->name_ru = $request->title_ru;
        $attribute->name_uk = $request->title_uk;
        $attribute->item_name_ru = $request->long_title_ru;
        $attribute->item_name_uk = $request->long_title_uk;
        $attribute->group_attribute_id = $request->group_attribute_id;
        $attribute->sort = $request->sort;
        $attribute->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'long_title'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'attribute',
                    'module_id' => $attribute->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect()
            ->route('admin-attribute-index')
            ->withErrors('Создано');
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
        $attribute = Attribute::find($id);
        $group_attributes = GroupAttribute::with('categories')->get();
        $langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('attribute', 'title', $attribute->id, $lang->locate_code),
                'long_title' => Document::get('attribute', 'long_title', $attribute->id, $lang->locate_code),
            ];
        }
        $attribute->data = $arr;

        return view('admin.attribute.edit', compact('attribute', 'group_attributes', 'langs', 'order_count', 'contacts_count'));
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
//dd($request);
        $attribute = Attribute::find($id);
        $attribute->name = $request->title_ru;
        $attribute->item_name = $request->long_title_ru;
        $attribute->group_attribute_id = $request->group_attribute_id;
        $attribute->sort = $request->sort;
        $attribute->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'long_title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'attribute',
                        'module_id' => $attribute->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

        return back()->withInput()->withErrors('Обновлен');
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
        $attribute = Attribute::find($id);
        Document::where('module_id', $attribute->id)->where('module', 'attribute')->delete();
        $attribute->delete();

        return back()->withErrors('Delete');
    }
}
