<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Job_posts;

use Illuminate\Http\Request;

class SinglePostController extends Controller
{
  public function jobpost($post_id)
  {
      $post =Job_posts::find($post_id);
      return view('single',['post' => $post]);

  }
  public function article($post_id)
  {
      $post =Articles::find($post_id);
      return view('single',['post' => $post]);

  }
}
