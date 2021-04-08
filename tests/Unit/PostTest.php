<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\App;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    // public function test_post_exists()
    // {
    //     // $this->assertDatabaseHas('posts', ['user_id' => 3]);

    //     $this->assertTrue(true);
    // }

    // public function test_full_name_accessor_works()
    // {
    //     $user = factory('App\User')->make([
    //         'first_name' => 'mohammad2',
    //         'last_name' => 'akbari2',
    //     ]);
    //     $this->assertEquals('mohammad2 akbari2', $user->full_name);
    // }

    public function test_posts_comments_relation()
    {
        $comment = factory('App\Comment')->create([
            'body' => 'nice',
            'post_id' => rand(1, 8),
            'commentable_type' => 'faiiil'
        ]);

        $this->assertInstanceOf('App\Post', $comment->post);
    }

}
