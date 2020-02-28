<?php
namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
      //  $latest_posts = Post::orderBy('id', 'DESC')->take(3)->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);      
        return view('indexpage', ['posts' => $posts]);

    }
}
