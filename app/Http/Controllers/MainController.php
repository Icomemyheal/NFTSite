<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function product(){
        return view('product/index');
    }
    public function index(){
        return view('main/index');
    }
    public function catalog(){
        return view('catalog/index');
    }
}
