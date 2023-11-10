<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class crudcontroller extends Controller
{
    //
    function proAll(){
        $all_product=Product::all();
        return view('crud',["pro_data"=>$all_product]);
    }
    function insert(Request $request){
        // $image_extenstion = $request->file('sample_image')->getClientOriginalExtension();
        $image_file = time() . "_" . $request->file('sample_image')->getClientOriginalName();
        $image_name= (explode(".",$request->sample_image->getClientOriginalName()))[0];
        // $image=$image_name.".".$image_extenstion;
 		

        $product=new Product();
        $product->p_name=$request->p_name;
        $product->p_image = $image_file;
        $product->p_price=$request->p_price;
        $product->p_oprice=$request->p_oprice;
        $product->p_brand=$request->p_brand;
        $product->p_quantity=$request->p_qty;
        $product->p_info= $request->p_desc;
        // $product->p_name="s21 fe";
        // $product->p_image = "samsund_s21fe_1";
        // $product->p_price="33000";
        // $product->p_oprice=45000;
        // $product->p_brand=$request->samsung;
        // $product->p_quantity=100;
        // $product->p_info=" samsung description";
        $product->save();

        $request->sample_image->move(public_path('productimages'), $image_file);
        // $request->image->move( public_path('product_image'), $image);

        return [$request->all(),$image_file];

    }
    public function imgfunc(Request $request){
        $image= $request->file('sample_image')->getClientOriginalName();
        
        return $image;
    }
    public function delfunc(Request $request){
        $id=$request->p_id;
        DB::delete('delete from products where p_id = ?', [$id]);
        return $request->p_id;
    }
}
