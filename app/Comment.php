<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'body',
    ];

    public function bosyu()
    {
        return $this->belongsTo('App\Bosyu');
    }
}
