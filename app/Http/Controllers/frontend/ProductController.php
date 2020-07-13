<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function GetDetail(){
        return view("frontend.product.detail");
    }

    function GetShop(){
        return view("frontend.product.shop");
    }
}
