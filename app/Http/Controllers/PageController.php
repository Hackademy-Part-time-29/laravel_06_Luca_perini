<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePageView(){
        $title = "Studio Legale";
        return view('welcome', compact('title'));
    }
    public function serviziView(){
        $title = "Studio Legale";
        return view('servizi',  compact('title'));
    }
}
