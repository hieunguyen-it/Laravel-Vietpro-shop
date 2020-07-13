<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function GetIndex(){
        return view("frontend.index");
    }

    function GetAbout(){
        return view("frontend.about");
    }

    function GetContact(){
        return view("frontend.contact");
    }
}
