<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\cartitems;
use App\Models\order;
use App\Models\Product;
use App\Models\userAccount;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Dompdf\Dompdf;


class OrderController extends Controller
{
    function paymentPageItem(Request $req)
    {
        $u_mail = $req->session()->get("user");
        $u_id = userAccount::where('u_mail', $u_mail)->value("u_id");
        $c_id = cart::where('u_id', $u_id)->value('c_id');
        $cartItems = Product::join('cartitems', 'cartitems.p_id', '=', 'products.p_id')->where('cartitems.c_id', $c_id)->get();
        // $items=$GLOBALS['Items'];
        // view()->share('cartItems', $items);  
        return view("payment", ["cartItems" => $cartItems]);
        // return $cartItems;
    }
    function checkoutPageItem(Request $req)
    {
        $u_mail = $req->session()->get("user");
        $u_id = userAccount::where('u_mail', $u_mail)->value("u_id");
        $c_id = cart::where('u_id', $u_id)->value('c_id');
        $cartItems = Product::join('cartitems', 'cartitems.p_id', '=', 'products.p_id')->where('cartitems.c_id', $c_id)->get();
        $req->session()->put('cart_items', $cartItems);
        // $items=$GLOBALS['Items'];
        // view()->share('cartItems', $items);  
        return view("checkout", ["cartItems" => $cartItems]);
        // return $cartItems;
    }
    function addressStore(Request $req)
    {
        $data = $req->input();
        $data = array_slice($data, 1);
/* "fn":"N","ln":"Yha'A i","email":"wimbavoz@hetitu.fk","phone":"An","state":"U","disctrict":"A","pincode":"A lv ank","address1":"Sagkm ai","address2":"Awa yauabiiagpa" */
        $address = "";
        foreach ($data as $item) {
            $address=$address. array_search($item, $data).":".$item ."|";
        }
        $req->session()->put('shipping_address',["data"=> $data]);
        session(["address" => $address]);
        return "payment";
    }
    function orderInsert(Request $req)
    {

        // return $req->session()->get('shipping_address')
        return $req->session()->get('cart_items');
    }
    function generatePDF(Request $req)
    {
        $dompdf = new Dompdf();
        $cart_items=$req->session()->get('cart_items');
        $html = view('templates.invoice');
        $dompdf->loadHTML($html);
        $dompdf->render();
        $u_mail = $req->session()->get("user");
        $u_id = userAccount::where('u_mail', $u_mail)->value("u_id");
        $c_id = cart::where('u_id', $u_id)->value('c_id');
        cartitems::where('c_id', '=', $c_id)->delete();
        try {
            $order = new order();
            $order->u_id = $u_id;
            $order->address = $req->session()->get('address');
            $order->o_amount = $req->input('o_amount');
            $order->payment_id = $req->input('payment_id)');
            $order->o_paymethod = "razorpay";
            $order->o_data = $cart_items;
            $order->save();
            return $u_id. $req->session()->get('address'). $req->input('o_amount').'payment id==== '. $req->input('payment_id)'). $cart_items;
        } catch (\Throwable $th) {
            throw $th;
        }
        
        session()->remove('cart_items');
        // $pdf = $dompdf->output();
        // return new Response($pdf, 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'attachment; filename="orders_report.pdf"'
        // ]);
        // return;
    }
}
