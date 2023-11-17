<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact(){
        return view('contact');
    }

    public function home(){
        return view('/home');
    }

    public function ammenities(){
        return view('ammenities');
    }

    public function about(){
        return view('/about');
    }

    public function form(){
        return view('/form');
    }
}
