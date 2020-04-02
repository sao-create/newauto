<?php

use Illuminate\Database\Seeder;
use App\Bosyu;
use App\Comment;



class BosyuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Bosyu::class, 50)
            ->create()
            ->each(function ($bosyu) {
                $comments = factory(App\Comment::class, 2)->make();
                $bosyu->comments()->saveMany($comments);
            });
 
    }
}
