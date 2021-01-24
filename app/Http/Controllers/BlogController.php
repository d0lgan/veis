<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Document;
use App\Language;
use App\Contact;
use App\Order;
use App\Slider;
use Illuminate\Http\Request;
use App\BlogCategory;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $locale = Lang::getLocale();
        $categories = BlogCategory::all();
        foreach ($categories as $category){
            $category->title = Document::get('blog_category', 'title', $category->id, $locale);
        }
        $article = Blog::find($id);
        $article->title = Document::get('blog', 'title', $article->id, $locale);
        $article->description = Document::get('blog', 'description', $article->id, $locale);

        return view('site.blog')->with(compact('categories', 'article'));
    }

    public function indexAdmin( Request $request ) {
        //разрешаем админу
        $request->user()->authorizeRoles( [ 'admin' ] );

//        $slides = Slider::all();

        $categories = BlogCategory::all();
        $articles = Blog::with('blog_categories')->get();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.blog.index', compact( 'categories', 'articles', 'order_count', 'contacts_count' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BlogCategory::all();
        $langs = Language::all();
        $article = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.blog.create', compact('categories', 'langs', 'article', 'contacts_count', 'order_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $article = new Blog;

        $article->title = $request->title_ru;
        $article->short_description = $request->short_description_ru;
        $article->description = $request->description_ru;
        $article->category_id = $request->category;

        if($_FILES['image']['name']){

            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }else{
            $image = null;
        }

        $article->image = $image;
        $article->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'short_description', 'description'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'blog',
                    'module_id' => $article->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect()->route('admin-blog-index')->withInput()
            ->withErrors(array('info_messages' => 'Новость создана!'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Blog::find($id);

        $categories = BlogCategory::all();

        $langs = Language::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('blog', 'title', $article->id, $lang->locate_code),
                'short_desc' => Document::get('blog', 'short_description', $article->id, $lang->locate_code),
                'description' => Document::get('blog', 'description', $article->id, $lang->locate_code)
            ];
        }
        $article->data = $arr;
        return view('admin.blog.edit', compact('article', 'categories', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Blog::find($id);
        $image = $article->image;
        if(isset($request->del_image) || $_FILES['image']['name']){
            $file = public_path() . '/house/uploads/' . $article->image;
            if(File::exists($file)) {
                File::delete($file);
            }

            $image = null;
        }

        $article->title = $request->title_ru;
        $article->short_description = $request->short_description_ru;
        $article->description = $request->description_ru;
        $article->category_id = $request->category;
        if($_FILES['image']['name']){
            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }
        $article->image = $image;
        $article->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title', 'description', 'short_description'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'blog',
                        'module_id' => $article->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

        return redirect()->route('admin-blog-index')->withInput()
            ->withErrors(array('info_messages' => 'Новость обновлена!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
