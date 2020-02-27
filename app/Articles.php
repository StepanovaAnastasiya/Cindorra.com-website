<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{

  use Sluggable;

  public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

  public function writer()
 {
    return $this->belongsTo('App\User', 'author', 'id');
 }

}
