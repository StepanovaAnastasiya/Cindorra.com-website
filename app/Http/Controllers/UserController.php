<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class UserController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('writer')->where('author', Auth::id())->orderBy('id', 'DESC')->paginate(5);
        return view('profile.home', ['posts' => $posts]);

   }


  public function createPost()
{
    return view('posts.post_create');
}
public function storePost(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );

       $image = $request->file('image');
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images');
       $image->move($destinationPath, $input['imagename']);

        $post = new Post();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->author = Auth::id();
        $post->image = $input['imagename'];
        $post->save();
        $category = $request->get('category');
        DB::insert('insert into incats (post_id, cat_id) values (?, ?)', [$post->id, $category]);
        return redirect()->route('home')->with('status', 'New post has been successfully created!');

       }



   public function editPost($cat_slug, $slug)
   {
       $post =Post::where('slug',$slug)->first();
       if(Auth::id()==$post->author)
       {
           return view('posts.post_edit', ['post' => $post]);
       }
       else
       {
           return redirect()->route('home')->with('status', 'Error, you can edit only your posts!');
       }
   }


   public function updatePost(Request $request, $slug)
{
    $request->validate([
                    'title' => 'required',
                    'body' => 'required',
                  ]
            );

      $post = Post::where('slug',$slug)->first();
  if(Auth::id()==$post->author)
  {

      $post->title = $request->get('title');
      $post->body = $request->get('body');

      if ($request->hasFile('image')) {
          $image = $request->file('image');
          $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('/images');
          $image->move($destinationPath, $input['imagename']);
          $post->image = $input['imagename'];
      }

      $post->save();

      // Updating slug:

      $post->slug = null;
      $post->update(['title' => $request->get('title')]);


        if ($request->get('category')) {
      $category = $request->get('category');
      DB::insert('update incats set cat_id = ? where post_id = ?', [$category,$post->id]);
    }
      return redirect()->route('home')->with('status', 'Post has been successfully updated!');
  }
  else
  {
    return redirect()->route('home')->with('status', 'Error, you can edit only your posts!');
  }
}

public function deletePost(Request $request, $slug)
   {
       $post = Post::where('slug',$slug)->first();
       $title= $post->title;
       if(Auth::id()==$post->author)
       {
       $post->delete();
       DB::table('incats')->where('post_id', '=', $post->id)->delete();

       return redirect()->route('home')->with('status', "Post \"$title\" has been successfully deleted!");
       }
       else
       {
       return redirect()->route('home')->with('status', 'Error, you can delete only your posts!');
       }
   }
}
