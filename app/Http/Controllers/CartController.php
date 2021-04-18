<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
        public function index()
        {
            

            return view('cart.cart');
        }

        // public function __construct()
        // {
        //     // $this->middleware(['auth'])->only(['store', 'destroy']);
    
        //     $this->middleware(['auth']);
        // }
    

        public function cartdata()
    {   
        $carts = Cart::get(); 


        return json_encode($carts);
    }

    public function complete()
    {
        return view('complete');
    }

        


}
