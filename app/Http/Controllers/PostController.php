<?php
namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $latest_posts = Post::orderBy('id', 'DESC')->take(3)->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);


        $data = [
            'latest_posts' => $latest_posts,
             'posts'=> $posts,


        ];

        return view('indexpage', $data);

    }
}
