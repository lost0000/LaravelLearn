<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{


    public function index() 
    {
        // $posts = Post::get(); //laravel coll
        // orderBy('created_at', 'desc')->

        return view('shop.shop');

    }

    public function jsondata()
    {
        $products = Product::get();
        return json_encode($products);
    }
}
