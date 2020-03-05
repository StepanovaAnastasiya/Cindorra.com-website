<?php
namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function show($cat_slug, $slug)
    {

        $post = Post::where('slug',$slug)->first();
        return view('posts.single',['post' => $post]);
    }

    /**
     * Explore all posts || explore posts by given category.
     *
     * @param  string $category
     * @return \Illuminate\Http\Response
     */
    public function explore($category = null)
    {
        if (isset($category)) {
            $cat_id = DB::table('categories')->where('cat_slug', $category)->pluck('id');
            if ($cat_id->count() === 0) {
                return redirect()->to('/explore')->send();
            }
            $posts = DB::table('posts')
                ->select('title', 'slug', 'body', 'image', 'created_at')
                ->join('categories', 'posts.id', '=', 'incats.post_id')
                ->where('categories.id', '=', $cat_id)
                ->paginate(15);
        } else {
            $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(15);
        }

        if (empty($posts)) {
            return abort(404);
        }

        return view('posts.explore')->with('posts', $posts);
    }
}
