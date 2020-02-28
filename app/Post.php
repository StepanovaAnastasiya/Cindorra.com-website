<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Post extends Model
{

  # use Sluggable;

  //public function sluggable()
  //  {
    //    return [
    //        'slug' => [
    //            'source' => 'title'
    //        ]
    //    ];
//
//public function category(){
  // $post_id = $this->id->get();
  // $category = DB::table('categories')
  //->select('title', 'slug')
  //->join('incats', 'categories.id', '=', 'incats.cat_id')
  //->where('post_id', '=', $post_id)
  //->get();
  //return $category;
//  }

  public function writer()
 {
    return $this->belongsTo('App\User', 'author', 'id');
 }

}
