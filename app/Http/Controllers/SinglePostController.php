<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{

  public function show($post_id)
  {
      $post = Post::find($post_id);
      return view('single',['post' => $post]);

  }
}
