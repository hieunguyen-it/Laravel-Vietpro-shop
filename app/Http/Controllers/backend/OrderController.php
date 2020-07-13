<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    function GetOrder(){
        return view("backend.order.order");
    }

    function GetProcessed(){
        return view("backend.order.processed");
    }

    function GetDetailorder(){
        return view("backend.order.detailorder");
    }
}
