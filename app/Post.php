<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function comments()
    // {
    //     return $this->hasMany('App\Comment');
    // }

    // public function tags()
    // {
    //     return $this->belongsToMany('App\Tag');
    //     // return $this->belongsToMany('App\Tag')->withPivot('CostumColumn');
    //     // return $this->belongsToMany('App\Tag')->withTimestamps();
    // }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }


    // public function comments()
    // {
    //     return $this->morphMany('App\Comment', 'commentable');
    // }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
