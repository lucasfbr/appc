<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Gate;

class PostController extends Controller
{
    public function index(Post $post){

        $posts = $post->All();

        return view('admin.post.index', ['posts' => $posts]);

    }

}
