<?php

namespace App\Http\Controllers;

use App\Document;
use App\Language;
use App\Contact;
use App\Order;
use App\Option;
use App\ValueOption;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OptionController extends Controller
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
    public function indexAdmin( Request $request ) {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

        $options = Option::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();


        return view( 'admin.option.index', compact( 'options', 'order_count', 'contacts_count' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request )
    {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

        $option = Option::all();
        $langs = Language::all();

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.option.create', compact( 'option', 'langs', 'contacts_count', 'order_count' ) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $langs = Language::all();
        $option = new Option;

        $option->title_ru = $request->title_ru;
        $option->title_uk = $request->title_ru;
        $option->type = $request->type;
        $option->need = $request->need;
        $option->sort = $request->sort;
        $option->public = $request->public;
        $option->save();

        foreach ($langs as $lang) {

            $documents = ['title'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'option',
                    'module_id' => $option->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        for ($i=0;$i<count($request->value_ru); $i++){
            if($request->value_ru[$i] != null){

                $option_value = new ValueOption;
                $option_value->value_ru = $request->value_ru[$i];
                $option_value->value_uk = $request->value_uk[$i];
                $option_value->image = $request->image[$i];
                $option_value->sorting = $request->sorting[$i];

                $option_value->option_id = $option->id;

                $option_value->save();
            }



            foreach ($langs as $lang) {

                $documents = ['value'];
                foreach ($documents as $document) {
                    $content = $document . '_' . $lang->locate_code;

                    Document::create([
                        'module' => 'option_value',
                        'module_id' => $option_value->id,
                        'lang' => $lang->locate_code,
                        'type' => $document,
                        'content' => request($content, '')[$i]
                    ]);
                }

            }

        }

        return redirect()->route('admin-options-index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request /*Option $option*/, $id)
    {
        $option = Option::with('values')->find($id);
        $langs = Language::all();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = Document::get('option', 'title', $option->id, $lang->locate_code);
        }
        $option->title = $arr;
        foreach($option->values as $value){

            $arr = [];
            foreach ($langs as $lang) {
                $arr[$lang->locate_code] = Document::get('option_value', 'value', $value->id, $lang->locate_code);
            }

            $value->value = $arr;
        }

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        // echo "<pre>";
        // var_dump(Document::all());
        // echo "</pre>";
        // exit;

        return view('admin.option.edit', compact('option', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $option = Option::find($id);
        $option->title_ru = $request->title_ru;
        $option->title_uk = $request->title_uk;
        $option->type = $request->type;
        $option->sort = $request->sort;
        $option->public = $request->public;
        $option->need = $request->need;
        $option->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'option',
                        'module_id' => $option->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

        $deleted = explode(',', $request->deleted);

        $option->values()->whereIn('id', $deleted)->delete();
        Document::whereIn('module_id', $deleted)->delete();
        $request->idv = array_unique($request->idv);
        for ($i=0;$i<count($request->idv); $i++){
            if($request->value_ru[$i] != null){
                if($request->idv[$i] != 0){

                    $value_option = ValueOption::find($request->idv[$i]);
                    $value_option->value_ru = $request->value_ru[$i];
                    $value_option->value_uk = $request->value_uk[$i];
                    $value_option->sorting = $request->sorting[$i];
                    $value_option->image = $request->image[$i];
                    $value_option->option_id = $option->id;

                }else{
                    $value_option = new ValueOption;
                    $value_option->value_ru = $request->value_ru[$i];
                    $value_option->value_uk = $request->value_uk[$i];
                    $value_option->sorting = $request->sorting[$i];
                    $value_option->image = $request->image[$i];
                    $value_option->option_id = $option->id;
                }
                $value_option->save();
                foreach ($langs as $lang) {

                    $documents = ['value'];
                    foreach ($documents as $document) {
                        $content = $document . '_' . $lang->locate_code;

                        Document::updateOrCreate([
                            'module' => 'option_value',
                            'module_id' => $value_option->id,
                            'lang' => $lang->locate_code,
                            'type' => $document,
                        ],
                            [
                                'content' => request($content, '')[$i]
                            ]);
                    }

                }

            }
        }

        return redirect()->route('admin-options-index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $option = Option::find($id);
        Document::where('module_id', $id)->where('module', 'option')->delete();

        foreach ($option->values as $value){
            Document::where('module_id', $value->id)->where('module', 'option_value')->delete();
        }

        $option->values()->delete();
        $option->delete();

        return redirect()->route('admin-options-index');
    }
}
