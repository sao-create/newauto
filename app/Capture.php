<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
    //
    protected $guarded = array('id');
    protected $table = 'capture';


    // 以下を追記
    public static $rules = array(
        'title' => 'required',
    );

}
