<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            ['user_id' => 1, 'post_id' => 4, 'content' => "Comment Content 1"],
            ['user_id' => 1, 'post_id' => 5, 'content' => "Comment Content 2"],
            ['user_id' => 1, 'post_id' => 6, 'content' => "Comment Content 3"],
            ['user_id' => 2, 'post_id' => 7, 'content' => "Comment Content 4"],
        ]);
    }
}
