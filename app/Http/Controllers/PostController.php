<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        // $posts = Post::get(); //laravel coll
        // orderBy('created_at', 'desc')->
         $posts = Post::latest()->with(['user', 'likes'])->paginate(20); //just gets amount specified instead of all //paginate will only work with tailwind but may need custom with bootstrap etc.
        return view('posts.index', [
            'posts' => $posts       //gets all posts and puts them into an array on the posts view. Can use for cart and also for main shop
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        auth() -> user() -> posts() -> create([
            'body' => $request -> body
        ]);

        return back();
    }

    public function destroy(Post $post)
    {


        $this->authorize('delete', $post); //auths if the right person

        $post->delete();

        return back();
    }
}
