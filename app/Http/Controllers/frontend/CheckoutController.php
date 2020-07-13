<?php

namespace App\Http\Controllers\frontend;
use App\Http\Requests\CheckOutRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    function GetCheckout(){
        return view("frontend.checkout.checkout");
    }

    function PostCheckout(CheckOutRequest $r){
        
    }

    function GetComplete(){
        return view("frontend.checkout.complete");
    }
}
