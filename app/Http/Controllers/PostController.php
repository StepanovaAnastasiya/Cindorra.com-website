<?php
namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  public function show($cat_slug, $slug = null)
  {
    if (isset($slug))
    {
      $post = Post::where('slug',$slug)->first();
      return view('posts.single',['post' => $post]);
    }
    else
    {
      return redirect()->route('explore',['cat_slug'=>$cat_slug]);
    }
  }

  /**
  * Explore all posts || explore posts by given category.
  *
  * @param  string $category
  * @return \Illuminate\Http\Response
  */
  public function explore($cat_slug = null)
  {
    if (isset($cat_slug))
    {
      $cat_id = DB::table('categories')->where('cat_slug', $cat_slug)->pluck('id');
      if ($cat_id->count() === 0)
      {
        return redirect()->to('/explore')->send();
      }
      $posts = DB::table('incats')
      ->select('title', 'slug', 'body', 'image', 'created_at','cat_title','cat_slug','name')
      ->join('posts', 'incats.post_id','=','posts.id')
      ->join('categories', 'incats.cat_id', '=', 'categories.id')
      ->join('users', 'posts.author', '=', 'users.id')
      ->where('incats.cat_id', '=', $cat_id)
      ->orderBy('created_at', 'DESC')
      ->paginate(15);


    } else
    {
      $posts = DB::table('incats')
      ->select('title', 'slug', 'body', 'image', 'created_at','cat_title','cat_slug','name')
      ->join('posts', 'incats.post_id','=','posts.id')
      ->join('categories', 'incats.cat_id', '=', 'categories.id')
      ->join('users', 'posts.author', '=', 'users.id')
      ->orderBy('created_at', 'DESC')
      ->paginate(15);
    }

    if (!empty($posts))
    {
      return view('posts.explore')->with('posts', $posts);
    }
    else
    {
      return abort(404);
    }
  }
}
