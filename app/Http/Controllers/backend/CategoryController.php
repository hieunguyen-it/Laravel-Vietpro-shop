<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\{AddCategoryRequest,EditCategoryRequest};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\category;

class CategoryController extends Controller
{
    function GetCategory(){
        $data ['categorys'] = category::all()->toarray();
        return view("backend.category.category",$data);
    }
    function PostCategory(AddCategoryRequest $r)
    {
        if(GetLevel(category::all()->toarray(),$r->parent,1) >2  )
        {
            return redirect()->back()->with('error','Giao diện web không hỗ trợ danh mục lớn hơn 2 cấp');
        }

        $cate= new category;
        $cate->name=$r->name;
        $cate->slug=str_slug($r->name);
        $cate->parent=$r->parent;
        $cate->save();
        return redirect()->back()->with('thongbao','Đã thêm danh mục:'.$r->name);
    }

    function GetEditCategory($id_category){
        $data['cate'] = category::find($id_category);
        $data['categorys'] = category::all()->toarray();
        return view("backend.category.editcategory",$data);
    }

    function PostEditCategory(EditCategoryRequest $r, $id_category)
    {

    }
}
