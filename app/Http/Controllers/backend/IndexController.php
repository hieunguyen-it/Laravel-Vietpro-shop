<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function GetIndex(){
        return view("backend.index");
    }

    function Logout(){
        Auth::logout();
        return redirect('login ');
    }
}
