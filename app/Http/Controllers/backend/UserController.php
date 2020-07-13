<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\AddUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    function GetListUser(){
        return view("backend.user.listuser");
    }

    function GetEditUser(){
        return view("backend.user.edituser");
    }

    function GetAddUser(){
        return view("backend.user.adduser");
    }

    function PostAddUser(AddUserRequest $r){
        
    }
}
