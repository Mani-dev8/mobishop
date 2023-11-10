<?php

namespace App\Http\Controllers;
use App\Models\userAccount;
use App\Models\cart;
use App\Models\cartitems;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
class BaseController extends Controller{
   public function __construct()
   {
    $value="demo value 1 common";
    View::share('value',$value);
   } 
}
class CartController extends BaseController
{
    function addToCart(Request $req){
        $p_id=$req->id;
        $user=$req->session()->get('user');
        $u_id=userAccount::where('u_mail',$user)->value('u_id');
        $c_id=cart::where('u_id',$u_id)->value('c_id');
        $cartitems=new cartitems();
        $cart_item_id=cartitems::where('p_id',$p_id)->where('c_id',$c_id)->value('citem_id');
        
        if($u_id){
            if ($cart_item_id) {
                $qty=cartitems::where('p_id',$p_id)->where('c_id',$c_id)->value('qty');
                $qty=$qty+1;
                DB::update('update cartitems set qty =' .$qty .' where citem_id = '. $cart_item_id);

                return ['type' => 'success', 'value' => 'Product Added Successfully, Please check your Cart'];
            } else {
                $cartitems->p_id=$p_id;
                $cartitems->c_id=$c_id;
                $cartitems->qty=1;
                $cartitems->save();
                // $user = $req->session()->get('u_mail');
                return ['type' => 'success', 'value' => 'Product Added Successfully, Please check your Cart'];
            }
        }
        else{
            return ['type'=>'warn','value'=>'It seems like you are attempting to add product without login, Please login ! '];
        }
       
        echo 'user= ' . $user  .'user_id= '. $u_id . ' prod='.$p_id .'   c_id=  '.$c_id .'  cart_item_id  =  '.$cart_item_id;
    }
    public function fetchCartItem(Request $req){

     $user=$req->session()->get('user');
     $u_id=userAccount::where('u_mail',$user)->value('u_id');
     $c_id=cart::where('u_id',$u_id)->value('c_id');
    //  $cart_item=cartitems::all()->where('c_id',$c_id);
     $cart_items=Product::join('cartitems', 'cartitems.p_id','=', 'products.p_id')->where('cartitems.c_id',$c_id)->get();
    $GLOBALS['Items']=$cart_items;
     view()->share('cartItems',$cart_items);
    //  foreach($cart_items as $item){
    //     echo 'qty '. $item->qty .'name '. $item->p_name . 'image ' . $item->p_image . 'price ' . $item->p_price . 'o price ' . $item->p_oprice . 'brand ' . $item->p_brand . '</br>';
    //  }
     return view('/cart', ['cartItems'=>$cart_items]);
    }
    // public function Name(){
    //     return redirect()->action('ControllerTwo@index',['cartItems'=>$GLOBALS['Items']]);
    // }
    public function quantityPlus(Request $req){
        $qty =(int)$req->q;
        $c_id=$req->c;
        $p_id=$req->p;
        cartitems::where('c_id',$c_id)->where('p_id',$p_id)->update(['qty'=>$qty+1]);
        return 'increased';
    }
    public function quantityMinus(Request $req){
        $qty= (int)$req->q;
        $c_id=$req->c;
        $p_id=$req->p;
        if($qty>1){

            cartitems::where('c_id',$c_id)->where('p_id',$p_id)->update(['qty'=>$qty-1]);
            return 'decreased';
        }
        else{
            cartitems::where('c_id',$c_id)->where('p_id',$p_id)->delete();
            return 'deleted';
        }
        // return "quantity ";

    }
}
