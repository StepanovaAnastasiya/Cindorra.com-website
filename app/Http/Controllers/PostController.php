<?php
namespace App\Http\Controllers;
use App\Job_posts;
use App\Articles;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index()
    {
        $latest_job_post = Job_posts::orderBy('id', 'DESC')->take(3)->get();
        $job_posts = Job_posts::orderBy('id', 'DESC')->paginate(2);
        $latest_articles = Articles::orderBy('id', 'DESC')->take(3)->get();
        $articles = Articles::orderBy('id', 'DESC')->paginate(2);


        $data = [
            'job_posts' => $job_posts,
            'latest_job_posts' => $latest_job_post,
            'latest_articles' => $latest_articles,
             'articles'=> $articles


        ];
        return view('welcome', $data);
    }
}
