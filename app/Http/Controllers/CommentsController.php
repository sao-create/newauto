<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bosyu;

class CommentsController extends Controller
{
    //
    public function store(Request $request)
    {
        $params = $request->validate([
            'bosyu_id' => 'required|exists:bosyus,id',
            'body' => 'required|max:2000',
        ]);

        $bosyu = Bosyu::findOrFail($params['bosyu_id']);
        $bosyu->comments()->create($params);

        return redirect()->route('member.bosyu.show', ['bosyu' => $bosyu]);
    }
}
