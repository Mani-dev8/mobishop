<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductPhoto;
use App\Models\userAccount;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function showData(Request $req){
        $pro_data = Product::all();
        $userTable= new userAccount();
        $u_id=$userTable->where('u_mail', $req->session()->get('user'))->value('u_id');
        return view('/home',['data'=>$pro_data,'user_id'=> $u_id]);
    }
    public function showDataShop(Request $req){
        $pro_data=Product::all();
        $u_id=userAccount::where('u_mail', $req->session()->get('user'))->value('u_id');
        return view('/shop',['data'=>$pro_data,'user_id'=>$u_id]);
    }
    public function showImageCol(Request $req){
        $color=$req->col;
        $image =ProductPhoto::where('image','like','%'.$color.'%')->value('image');
        return $image;
    }
    function searchItems(Request $req){
        $data=Product::where('p_name','like',"%".$req->input('key')."%")->get();
        session()->put('search_product',$data);
        return count($data);
    }  
}
