<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){

        return view("front.welcome");
    }

    public function about(){
        $company ="Laracast";
        return view("about", ["company"=>$company]);

    }

    public function contact(){

        return view("contact");
    }
}

Route::group(["namespace"=>"front"], function(){
    Route::get('/', function () {
        return view('front.welcome');
    })->name("home");
});

