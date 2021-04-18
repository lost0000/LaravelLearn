<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
        public function index()
        {
            

            return view('cart.cart');
        }

        public function __construct()
        {
            // $this->middleware(['auth'])->only(['store', 'destroy']);
    
            $this->middleware(['auth']);
        }
    

        

    
        // public function show(Post $post)
        // {
        //     return view('posts.show', [
        //         'post' => $post
        //     ]);
        // }
    
        // public function store(Product $product, Request $request)
        // {
    
        //     auth() -> user() -> cartitem() -> create([
        //         'body' => $request -> body
        //     ]);

        //     $product->cartitem()->create([
        //         'user_id' => $request->user()->id,
        //     ]);
    
        //     return back();

            
    
        //     return back();
        // }
    
        // public function destroy(Post $post)
        // {
    
    
        //     $this->authorize('delete', $post); //auths if the right person
    
        //     $post->delete();
    
        //     return back();
        // }
}
