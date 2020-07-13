<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\AddProductRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    function GetAddProduct()
    {
        return view("backend.product.addproduct");
    }

    function PostAddProduct(AddProductRequest $r)
    {
        
    }

    function GetEditProduct()
    {
        return view("backend.product.editproduct");
    }

    function GetListProduct()
    {
        return view("backend.product.listproduct");
    }
}
