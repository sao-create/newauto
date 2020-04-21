<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bosyu extends Model
{
    //
    public $timestamps = false;
    
    protected $table ="bosyu";
    protected $guarded = array('id');

    protected $fillable = [
        'title',
        'body',
        'rank',
        'code',
    ];

    // 以下を追記
    public static $rules = array(
        'title' => 'required',
        'rank' => 'required',
        'body' => 'required',
    );

    public function histories()
    {
        return $this->hasMany('App\History');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}




