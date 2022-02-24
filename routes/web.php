<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("hello/{name?}", function ($name = null ) {
    if ($name) {
        echo "Hello " . $name . "!";
    } else {
        echo  "Hello";
    }
});

Route::get("login", function () {
    return view("login");
});

Route::post("login", function (Illuminate\Http\Request $request) {
    $productDescription = $request->mota; // mô tả
    $price = $request->gia; // giá
    $discountPrice = $request->phantram; // phần trăm
    $discountPercent = $price * $discountPrice * 0.1; // số chiết khấu
    $discountAmount = $price - $discountPercent; // sau khi chiết khấu

    return view('welcome_admin', compact(["productDescription","price","discountAmount","discountPercent","discountPrice"]));

});
