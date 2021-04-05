<?php

namespace App\Http\Controllers;

use App\Address;
use App\Comment;
use App\Country;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function backup1()
    {
        // $address = Address::find(1);
        // $user = User::find(1);
        // dd($user->address);
        // dd($address->user);

        // $comment = Comment::find(1);
        // $post = Post::find(1);
        // $posts = Post::has('comments')->get();
        // dd($comment->post);
        // dd($post->comments);
        // dd($posts);

        // $comment = Comment::find(3);
        // $comment->post()->associate(Post::first());
        // dd($comment);
        // $comment->save();

        // $comment = Comment::find(3);
        // $comment->post()->dessociate();
        // dd($comment);
        // $comment->save();

        // $post = Post::find(1);
        // dd($post->comments()->where('id', 2)->get());

        $user = User::find(2);
        dd($user->carInfo);

        $country = Country::find(2);
        dd($country->posts);

    }

    public function index()
    {
        // posts<->tags
        // $post = Post::find(7);
        // dd($post->tags);
        // $tag = Tag::find(2);
        // dd($tag->posts);

        // $post = Post::find(3);
        // $post->tags()->attach(2);
        // $post->tags()->detach(2);
        // $post->tags()->sync(1);
        // $post->tags()->attach([1, 2]);

        // $post = Post::find(12);
        // dd($post->tags()->first()->pivot->costum_column);
        // dd($post->tags()->first()->pivot->created_at);
        // dd($post->tags()->first()->pivot->updated_at);


    }
}
