<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignController extends Controller
{
    public function index(){
        return view('design.index');
    }

    public function main(){
        return view('design.main');
    }

    public function product(){
        return view('design.product');
    }

    public function filter(){
        return view('design.filter');
    }

    public function info(){
        return view('design.info');
    }

    public function search(){
        return view('design.search');
    }

    public function order(){
        return view('design.order');
    }

    public function blog(){
        return view('design.blog');
    }
}
