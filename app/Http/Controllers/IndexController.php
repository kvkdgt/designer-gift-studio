<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function services(){
        return view('services');
    }
    public function gallery(){
        return view('gallery');
    }
}
