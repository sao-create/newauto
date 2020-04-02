<?php

use Faker\Generator as Faker;

$factory->define(App\Bosyu::class, function (Faker $faker) {
    return [
        //
        'title' => '投稿のタイトル',
        'body' => "本文です。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。\nテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト。",
        'rank' =>"ビショップ4",
        'code' =>'aaaaaaa',
 
    ];
});
