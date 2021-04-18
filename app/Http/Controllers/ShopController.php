<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ShopController extends Controller
{


//     public function __construct()
// {
//     $this->middleware('auth:api');
// }

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

    public function addtocart(Request $request)
    {

        $name = $request->all();
        
        $user = User::find($name['user_id']);
        
        $product = Product::find($name['product_id']);
        // $productprice = Product::find($name['price']);
        // $producttitle = Product::find($name['title']);


        if(!$product){
            abort(404);
        }

        $cart = session()->get('cart');
        
        //if empty cart, insert first product
        if(!$cart) {
            $cart = [ 
                    "user_id" => $user-> id,
                    "product_id" => $product-> id,
                    "quantity" => 1,
                    "price" => $product-> price,
                    "title" => $product->title
                ];

                Cart::create($cart);
                
                return redirect()->back()->with('success', 'Product added to cart');
            }

            $cart = [ 
                "user_id" => $user-> id,
                "product_id" => $product-> id,
                "quantity" => 1
            ];

            Cart::create($cart);
            
            return redirect()->back()->with('success', 'Product added to cart');

        
       

    
    }

    // public function store(Product $product, Request $request)
    //     {
    
    //         if($product->addedBy($request->user())){
    //             return response(null, 409); //conflict code
    //         }

    //         $product->
    
    //         return back();
    //     }


    //     public function addToCart(Request $request)
    //     {
    //         auth() -> user() -> cart() -> create([
    //             ''
    //         ]);
    //     }
    

    }