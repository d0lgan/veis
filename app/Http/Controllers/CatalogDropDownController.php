<?php

namespace App\Http\Controllers;

use App\CatalogDropDown;
use App\Category;
use App\Contact;
use App\Language;
use App\Order;
use Illuminate\Http\Request;

class CatalogDropDownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin(Request $request)
    {
        //разрешаем админу
        $request->user()->authorizeRoles(['admin']);

        $dropdown = CatalogDropDown::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.catalog_dropdown.index', compact('dropdown', 'order_count', 'contacts_count'));
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
        $elem = null;

        $categories_json = Category::select(['id', 'title_ru'])->get();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.catalog_dropdown.create', compact('elem', 'categories_json', 'langs', 'order_count', 'contacts_count'));
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
        /*$this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);*/

        $elem = new CatalogDropDown();
        $elem->title_ru = $request->title_ru;
        $elem->title_uk = $request->title_uk;
        $elem->category_id = $request->category_id;
        $elem->at_home = $request->at_home;


        $elem->link_ru = $request->link_ru;
        $elem->link_uk = $request->link_uk;
        $elem->sort = $request->sort;

        $elem->save();


        return redirect()
            ->route('admin-catalog-dropdown-index')
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

        $elem = CatalogDropDown::find($id);
        $categories_json = Category::select(['id', 'title_ru'])->get();

        $langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.catalog_dropdown.edit', compact('elem', 'categories_json', 'langs', 'order_count', 'contacts_count'));
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
        $elem = CatalogDropDown::find($id);
        $elem->title_ru = $request->title_ru;
        $elem->title_uk = $request->title_uk;
        $elem->link_ru = $request->link_ru;
        $elem->link_uk = $request->link_uk;
        $elem->category_id = $request->category_id;
        $elem->at_home = $request->at_home;

        $elem->sort = $request->sort;

        $elem->save();

        return redirect()->route('admin-catalog-dropdown-index');
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
        $elem = CatalogDropDown::find($id);
        $elem->delete();

        return back()->withMessage('Manufacturer Delete');
    }
}
