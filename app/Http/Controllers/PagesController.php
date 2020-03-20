<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    $posts = Post::orderBy('id', 'DESC')->paginate(3);
    if (empty($posts))
    {
      return abort(404);
    }
    return view('pages.index', ['posts' => $posts]);

  }
}
