<?php

namespace App\Http\Controllers;
use App\Models\ProductInfo;
use App\Models\ProductPhoto;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailContoller extends Controller
{
    //
    function productDetail(Request $req){
        $product=Product::all()->where('p_id',$req->p_id);
        $pro_info=ProductInfo::all()->where('p_id',$req->p_id);
        $pro_photo=ProductPhoto::all()->where('p_id', $req->p_id);
        return view('productDetail',["pro_info"=>$pro_info,"pro_photo"=>$pro_photo,"product"=>$product]);
        
    }
}
