<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) {
            $new_post = new Post();

            $new_post->title = 'This is title post ' . ($i + 1);
            $new_post->slug = Str::slug($new_post->title, '-');
            $new_post->content = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam deserunt eum sint? Quae, delectus necessitatibus? Reprehenderit veniam quis placeat voluptatum doloribus a eligendi enim? Sint ipsam quisquam recusandae iure aliquam.';

            $new_post->save();
        } 
    }
}
