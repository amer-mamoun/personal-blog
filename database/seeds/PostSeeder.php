<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['user_id' => 1, 'title' => "Post One", 'content' => "Post Content 1"],
            ['user_id' => 1, 'title' => "Post Tow", 'content' => "Post Content 2"],
            ['user_id' => 1, 'title' => "Post Three", 'content' => "Post Content 3"],
            ['user_id' => 2, 'title' => "Post four", 'content' => "Post Content 4"],
        ]);
    }
}
