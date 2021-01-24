<?php

namespace App\Http\Controllers;

use App\Document;
use App\Contact;
use App\Order;
use App\Language;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class SliderController extends Controller
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

    public function indexAdmin( Request $request ) {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

        $slides = Slider::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.slider.index', compact( 'slides', 'order_count', 'contacts_count' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $langs = Language::all();
        $slider = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        return view('admin.slider.create', compact('slider', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'image' => 'mimes:png'
        ]);
//dd($request);
        $slider = new Slider();
        $slider->title = $request->title_ru;
        $slider->button = $request->button_ru;
        $slider->additional_button = $request->additional_button_ru;
        $slider->additional_link = $request->additional_link;
        $slider->link = $request->link;
        $slider->color = $request->color;
        $slider->description = $request->description_ru;
        $slider->sort = $request->sort;

        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';

            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'slider_' . time() . '.' . $img_type[1];
            Image::make($request->image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $slider->image = $image_name;
        }

        $slider->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'button', 'additional_button'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'slider',
                    'module_id' => $slider->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect('/admin/slider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        $slider = Slider::find($id);

        $langs = Language::all();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('slider', 'title', $slider->id, $lang->locate_code),
                'description' => Document::get('slider', 'description', $slider->id, $lang->locate_code),
                'button' => Document::get('slider', 'button', $slider->id, $lang->locate_code),
                'link' => Document::get('slider', 'link', $slider->id, $lang->locate_code),
                'additional_button' => Document::get('slider', 'additional_button', $slider->id, $lang->locate_code),
                'additional_link' => Document::get('slider', 'additional_link', $slider->id, $lang->locate_code),
            ];
        }
        $slider->data = $arr;

        return view('admin.slider.edit')->with(compact('slider', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);

        $slider->title = $request->title_ru;
        $slider->button = $request->button_ru;
        $slider->link = $request->link;
        $slider->additional_button = $request->additional_button_ru;
        $slider->additional_link = $request->additional_link;
        $slider->color = $request->color;
        $slider->description = $request->description_ru;
        $slider->sort = $request->sort;

        if($request->del){
            if($slider->image){
                $file = public_path() . '/house/uploads/' . $slider->image;
                if(File::exists($file)) {
                    File::delete($file);
                }
                $slider->image = null;
            }
        }

        if ($request->image) {
            $destinationPath = public_path() . '/house/uploads/';

            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'slider_' . time() . '.' . $img_type[1];
            Image::make($request->image)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);
            $slider->image = $image_name;
        }

        $slider->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'button', 'additional_button',];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'slider',
                        'module_id' => $slider->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

        return redirect()->route('admin-slider-index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::find($id);
        $file = public_path() . '/house/uploads/' . $slide->image;
        if(File::exists($file)) {
            File::delete($file);
        }
        Document::where('module_id', $slide->id)->where('module', 'slider')->delete();
        $slide->delete();

        return redirect()->route('admin-slider-index');
    }
}
