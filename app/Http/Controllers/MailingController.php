<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use App\Contact;
use App\Order;
use App\Mail\Mailing;
use App\Mailing as Maili;
use Intervention\Image\ImageManagerStatic as Image;

class MailingController extends Controller
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

//        $statuses = Status::all();
        $contacts      = Contact::all();
        $contacts_count   = $contacts->count();
        $orders        = Order::all();
        $order_count   = $orders->count();

        return view( 'admin.mailing.index', compact('order_count', 'contacts_count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file) {
            $destinationPath = public_path() . '/house/uploads/';
            $image_name = $_FILES['file']['name'];
            $file = $request->file('file');
            $file->move($destinationPath, $image_name);
            /*Image::make($request->file)
                ->resize(null, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save($destinationPath . $image_name);*/
            $path = $destinationPath . $image_name;
        }else{
            $path = false;
        }

        if($request->users == 'clients'){
            $users = Maili::where('client', 1)->get();
        }else{
            $users = Maili::all();
        }
        foreach ($users as $user){
            Mail::to($user->email)->send(new Mailing(trim($request->desc, '<p></p>'), 'mailing', $request->title, $path));
        }

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function show(Mailing $mailing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function edit(Mailing $mailing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mailing $mailing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mailing  $mailing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mailing $mailing)
    {
        //
    }
}
