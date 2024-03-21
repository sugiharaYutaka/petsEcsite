<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function showShop(){
        return view('shop.shop');
    }
    public function showProduct(){
        return view('shop.product');
    }
    public function showCart(){
        return view('shop.cart');
    }
}
