<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class ShopController extends Controller
{


    public function __construct()
{
    $this->middleware('auth');
}

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
        // $user = Auth::user();
         dd($id = Auth::id());
        // dd($request->$user());
        //  dd($id = $request->$user->id());

        // dd($user = auth()->user());
        // dd($id = auth()->user()->id);
//under
        // $name = $request->all();
        
        
        // $product = Product::find($name['product_id']);

        // if(!$product){
        //     abort(404);
        // }

        // $cart = session()->get('cart');
        
        // //if empty cart, insert first product
        // if(!$cart) {
        //     $cart = [
        //             "user_id" => Auth::id(),
        //             "product_id" => $product-> id,
        //             "quantity" => 1
        //         ];

        //         Cart::create($cart);
                
        //         return redirect()->back()->with('success', 'Product added to cart');
        //     }
        

//          if (isset($cart[$id])) {
//  
//                         $cart['quantity']++;
//              

//              
//                         return redirect()->back()->with('success', 'Product added to cart successfully!');
//              
//                     }

        // auth() -> user() -> cart() -> create([
        //     'body' => $request -> body
        // ]);
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
