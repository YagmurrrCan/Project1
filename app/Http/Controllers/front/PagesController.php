<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\front;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view("front.welcome");
    }

    public function about()
    {
        $company = "Laracast";
        return view("about", ["company" => $company]);

    }

    public function contact()
    {

        return view("contact");
    }
}


