<?php
namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
      //  $latest_posts = Post::orderBy('id', 'DESC')->take(3)->get();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        return view('indexpage', ['posts' => $posts]);

    }
    public function cat_search($cat_slug)
    {
        $category = DB::table('categories')
        ->where('slug', '=', $cat_slug)
        ->first();
        $posts_id = DB::table('incats')
        ->where('cat_id', '=', $category->id)
        ->get();
        $id_array = [];
        foreach ($posts_id as $post) {
        $id_array [] = $post->post_id;
        }
        $posts = Post::whereIn('id',$id_array)->orderBy('id', 'DESC')->paginate(3);
        return view('indexpage', ['posts' => $posts]);

    }
}
