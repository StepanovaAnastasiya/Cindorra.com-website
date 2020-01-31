<?php

namespace App\Http\Controllers;

use App\Articles;
use App\Job_posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function JobPostList()
   {
       $posts = Job_posts::with('writer')->get();
       return view('jobpost_list', ['posts' => $posts]);
   }
   public function ArticleList()
  {
      $posts = Articles::with('writer')->get();
      return view('article_list', ['posts' => $posts]);
  }

    public function createJobPost()
  {
      return view('job_post_create');
  }

  public function createArticle()
{
    return view('article_create');
}
public function storePost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
       $image = $request->file('image');
       $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('/images');
       $image->move($destinationPath, $input['imagename']);

        switch($request->submit) {
            case 'job_post_create':
        $post = new Job_posts();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->author = Auth::id();
        $post->image = $input['imagename'];
        $post->save();
        return redirect()->route('all_jobposts')->with('status', 'New job post has been successfully created!');
        break;

        case 'article_create':
    $post = new Articles();
    $post->title = $request->get('title');
    $post->body = $request->get('body');
    $post->author = Auth::id();
    $post->image = $input['imagename'];
    $post->save();
    return redirect()->route('all_articles')->with('status', 'New article has been successfully created!');
    break;

     default:
     return redirect()->route('home')->with('status', 'Error!');

       }
}

}
