<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function home(){
    	return view('user.beranda');
    }
     public function tentang(){
    	return view('user.tentang');
    }
     public function kontak(){
    	return view('user.kontak');
    }
}
