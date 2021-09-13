<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use App\Document;
use App\Language;
use App\Contact;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\File;

class BlogCategoryController extends Controller
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

        $categories = BlogCategory::all();
        $articles = Blog::all();

        $orders        = Order::all();
        $order_count   = $orders->count();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();

        return view('admin.blog.index', compact('categories', 'articles', 'order_count', 'contacts_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $langs = Language::all();
        $category = null;

        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view('admin.blog-category.create', compact('category', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new BlogCategory;

        $category->title = $request->title_ru;

        if($_FILES['image']['name']){

            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_category_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }else{
            if($request->image == "null"){
                $image = null;
            }else{
                $image = $request->image;
            }
        }

        $category->image = $image;
        $category->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];
            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::create([
                    'module' => 'blog_category',
                    'module_id' => $category->id,
                    'lang' => $lang->locate_code,
                    'type' => $document,
                    'content' => request($content, '')
                ]);
            }

        }

        return redirect()->route('admin-blog-index')->withInput()
        ->withErrors(array('info_messages' => 'Категория создана!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $locale = Lang::getLocale();

        $categories = BlogCategory::all();
        foreach ($categories as $category){
            $category->title = Document::get('blog_category', 'title', $category->id, $locale);
        }
        $category = BlogCategory::find($id);

        $category->title = Document::get('blog_category', 'title', $category->id, $locale);
        $articles = Blog::where('category_id', $id)->get();
        foreach ($articles as $article){
            $article->title = Document::get('blog', 'title', $article->id, $locale);
            $article->short_description = trim(Document::get('blog', 'short_description', $article->id, $locale), '<p></p>');
        }

        return view('site.blog_category')->with(compact('categories', 'articles', 'category'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = BlogCategory::find($id);

        $langs = Language::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();
        $arr = [];
        foreach ($langs as $lang) {
            $arr[$lang->locate_code] = [
                'title' => Document::get('blog_category', 'title', $category->id, $lang->locate_code)
            ];
        }
        $category->data = $arr;
        return view('admin.blog-category.edit', compact('category', 'langs', 'order_count', 'contacts_count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = BlogCategory::find($id);
        $image = $category->image;
        if(isset($request->del_image) || $_FILES['image']['name']){
            $file = public_path() . '/house/uploads/' . $category->image;
            if(File::exists($file)) {
                File::delete($file);
            }

            $image = null;
        }

        $category->title = $request->title_ru;
        if($_FILES['image']['name']){
            $destinationPath = public_path() . '/house/uploads/';
            $img_type = explode("/", $_FILES['image']['type']);
            $image_name = 'blog_category_' . time() . '.' . $img_type[1];
            Image::make($_FILES['image']['tmp_name'])
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);

            $image = $image_name;
        }
        $category->image = $image;
        $category->save();

        $langs = Language::all();

        foreach ($langs as $lang) {

            $documents = ['title'];

            foreach ($documents as $document) {
                $content = $document . '_' . $lang->locate_code;

                Document::updateOrCreate(
                    [
                        'module' => 'blog_category',
                        'module_id' => $category->id,
                        'lang' => $lang->locate_code,
                        'type' => $document
                    ],
                    [
                        'content' => request($content, '')
                    ]);
            }


        }

        return redirect()->route('admin-blog-index')->withInput()
            ->withErrors(array('info_messages' => 'Категория обновлена!'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogCategory  $blogCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogCategory $blogCategory)
    {
        //
    }
}
