<?php

namespace App\Http\Controllers;

use App\Address;
use App\Comment;
use App\Post;
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


    }

    public function index()
    {
        $user = User::find(2);
        dd($user->carInfo);
    }
}
