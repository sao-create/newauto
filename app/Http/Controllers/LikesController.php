<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Like;
use Auth;
use App\Bosyu;

class LikesController extends Controller
{
    //
    public function store(Request $request, $bosyuId)
    {
        Like::create(
          array(
            'user_id' => Auth::user()->id,
            'bosyu_id' => $bosyuId
          )
        );

        $bosyu = Bosyu::findOrFail($bosyuId);

        return redirect()
             ->action('BosyuController@show', $bosyu->id);
    }

   
}
