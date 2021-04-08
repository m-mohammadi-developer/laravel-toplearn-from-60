<?php

namespace App\Http\Controllers;

use App\Address;
use App\Comment;
use App\Country;
use App\Image;
use App\Post;
use App\Tag;
use App\User;
use App\Video;
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

        // $user = User::find(2);
        // dd($user->carInfo);

        // $country = Country::find(2);
        // dd($country->posts);

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


        // $post = Post::find(2);
        // dd($post->image);

        // $user = User::find(2);
        // dd($user->image);

        // $image = Image::find(2);
        // dd($image->imageable);

        // $post = Post::find(1);
        // dd($post->comments);

        // $video = Video::find(1);
        // dd($video->comments);

        // $comment = Comment::find(2);
        // dd($comment->commentable);

        // $post = Post::find(4);
        // $comment = new Comment;
        // $comment->body = "That's So Cool";
        // $post->comments()->save($comment);
    }

    public function index()
    {
        // $posts = Post::all();
        // foreach ($posts as $post)
        // {
        //     dd($post->comments);
        // }

        // $posts = Post::with('comments')->get();
        // dd($posts[0]->comments);

        // $posts = Post::with(['comments', 'tags'])->get();
        // // dd($posts);

        // $posts = Post::withCount('comments')->get();
        // dd($posts[0]->Comments);

        // $posts = Post::with(['comments', 'comment.user'])->get();
        // $posts = Post::with('comments:id,body')->get();

        // $posts = Post::with(['comments' => function ($query) {
        //     $query->where('id', '1');
        // }])->get();
        // dd($posts[0]->comments);

        // select * from posts
        // select * from comments where post_id in [1,2,3,...]

        // egar-lazy
        // $posts = Post::all();
        // if ($cond) {
        //     $posts->load('comments');
        // }


        // $post = Post::find(1);
        // $post->loadMissing('comments'); // if comments did'nt load then load comments for post
        // dd($post);
            
    }
}
