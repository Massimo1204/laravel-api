<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class apiController extends Controller
{
    public function index(){
        $posts = Post::all();
        return response()->json([
            'success' => true,
            'results' => $posts
        ]);
    }

    public function show($id){
        $post = Post::fingOrFail($id);
        return response()->json([
            'success' => true,
            'result' => $post
        ]);
    }
}
