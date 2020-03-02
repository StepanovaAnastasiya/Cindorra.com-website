<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{

  public function show($slug)
  {

      $post = Post::where('slug',$slug)->first();
      return view('single',['post' => $post]);

  }
}
