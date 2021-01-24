<?php

namespace App\Http\Controllers;

use App\Document;
use App\Contact;
use App\Order;
use App\Language;
use Illuminate\Http\Request;
use App\Attribute;
use App\Product;
use App\GroupAttribute;
use Illuminate\Support\Facades\DB;
use App\Category;

class GroupAttributeController extends Controller
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
        $group_attributes = GroupAttribute::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.group-attribute.index', compact('group_attributes', 'order_count', 'contacts_count'));

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
//        $group_attributes = GroupAttribute::all();
        /*$categories       = Category::get()
                                    ->pluck( 'title', 'id' )
                                    ->prepend( trans
                                    ( 'Для всех категорий' ), '' );*/
        $categories = Category::get();
        $langs = Language::all();
        $group_attribute = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.group-attribute.create', compact
        ( 'categories', 'langs', 'group_attribute', 'order_count', 'contacts_count'));
    }

    public function store(Request $request)
    {

//        dd($request);

        $res = json_decode($request->categories);

        $this->validate($request, [
            'title_ru' => 'required',
        ]);

        $group_attribute = new GroupAttribute;
        $group_attribute->title_ru = $request->title_ru;
        $group_attribute->title_uk = $request->title_ru;
        if($request->public == null){
            $group_attribute->public = 0;
        }else{
            $group_attribute->public = $request->public;
        }

        $group_attribute->sort = $request->sort;
        $group_attribute->category_id = $request->category_id;
        $group_attribute->save();

        if ($res) {
            foreach ($res as $r) {
                $group_attribute->categories()->attach($r->id);
            }
        }

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'group_attribute',
                    'module_id' => $group_attribute->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect()
            ->route('admin-group-attribute-index')
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
        $group_attribute = GroupAttribute::find($id);
        $categories = Category::get();
        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('group_attribute', 'title', $group_attribute->id, $lang->locate_code)
            ];
        }
        $group_attribute->data = $arr;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.group-attribute.edit', compact('group_attribute', 'categories', 'langs', 'contacts_count', 'order_count'));
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
        $res = json_decode($request->categories);


        $group_attribute = GroupAttribute::find($id);
        $group_attribute->title_ru = $request->title_ru;
        $group_attribute->title_uk = $request->title_uk;
        if($request->public == null){
            $group_attribute->public = 0;
        }else{
            $group_attribute->public = $request->public;
        }

        $group_attribute->sort = $request->sort;
        $group_attribute->category_id = $request->category_id;
        $group_attribute->save();

        $group_attribute->categories()->detach();
        foreach ($res as $r) {
            $group_attribute->categories()->syncWithoutDetaching($r->id);
        }

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'group_attribute',
                        'module_id' => $group_attribute->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                    'content' => request($content, '')
                ]);
            }


        }

        return back()->withErrors('Обновлен');
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
        $group_attribute = GroupAttribute::find($id);
        $attributes = Attribute::where('group_attribute_id', $group_attribute->id)->get();
        Document::where('module_id', $group_attribute->id)->where('module', 'group_attribute')->delete();

        foreach ($attributes as $attribute) {
            $attribute->delete();
        }
        $group_attribute->delete();

        return back()->withMessage('Delete');
    }
}
