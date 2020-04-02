<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use kanazaca\CounterCache\CounterCache;

class Like extends Model
{
    //
    use CounterCache;

    public $counterCacheOptions = [
        'Bosyu' => [
            'field' => 'likes_count',
            'foreignKey' => 'bosyu_id'
        ]
    ];

    protected $fillable = ['user_id', 'bosyu_id'];

    public function Post()
    {
      return $this->belongsTo('App\Bosyu');
    }

    public function User()
    {
      return $this->belongsTo(User::class);
    }




}
