<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\userauth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductDetailContoller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(ShopController::class)->group(function () {
    Route::get('/home', 'showData');
    Route::get('/shop', 'showDataShop');
    Route::get('/imgcol', 'showImageCol');
});
Route::get('/',[ShopController::class, 'showData']);
Route::get('/logout', [userauth::class, 'logout']);
Route::view('/cart', 'cart');
Route::view('/productDetail', 'productDetail');
Route::view('/admin', 'aHome');
Route::view('/login', 'login');
Route::view('/index', 'emails.index');
Route::post('/login_page', [userauth::class, 'loginData']);
Route::view('/code', 'code_verification');
Route::view('/setting', 'UserSetting');
Route::get('/checkout', [OrderController::class, 'checkoutPageItem']);
Route::get('/payment', [OrderController::class, 'paymentPageItem']);
Route::post('/address',[OrderController::class,'addressStore']);
Route::get('/orderdetail', [OrderController::class, 'orderInsert']);    
Route::get('/generatepdf', [OrderController::class, 'generatePDF']);    
Route::view('/review', 'review');
Route::post('/send', [MailController::class, 'index']);
Route::controller(CartController::class)->group(function () {
    Route::get('/addcart', 'addToCart');
    Route::get('/mycart', 'fetchCartItem');
    Route::get('/qty_p', 'quantityPlus');
    Route::get('/qty_m', 'quantityMinus');
    Route::view('/noti', 'notification');
});
Route::get('/search_items', [ShopController::class, 'searchItems']);
Route::controller(ProductDetailContoller::class)->group(function () {
    Route::get('productInfo', 'productDetail');
});
Route::controller(crudcontroller::class)->group(function () {
    Route::get('/crud', 'proAll');
    Route::post('/insert', 'insert')->name('insert');
    Route::post('/image',  'imgfunc')->name('image');
    Route::post('/delete',  'delfunc')->name('delete');
});
