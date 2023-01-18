<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){

        // if (!$request->has('page')) {
        //     return inertia()
        // }

        $posts = Post::paginate(4);
        // return inertia('Posts/Index', compact('posts'));
        return inertia('Posts/Index', ['posts' => $posts]);
    }
}
