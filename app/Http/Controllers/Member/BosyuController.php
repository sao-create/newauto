<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Bosyu;

use App\History;

use Carbon\Carbon;

use Storage;

class BosyuController extends Controller
{
    //
    public function add()
    {
        return view('member.bosyu.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request,Bosyu::$rules);

        $bosyu = new Bosyu;
        $form = $request->all();

        unset($form['_token']);

        unset($form['image']);

        $bosyu->fill($form);
        $bosyu->save();

        return redirect('member/bosyu/index');
    }

    public function edit(Request $request)
    {
        $bosyu = Bosyu::find($request->id);
        if (empty($bosyu)) {
            abort(404);
        }
        return view('member.bosyu.edit',['bosyu_form' => $bosyu]);
    }

    public function update(Request $request)
    {
        $this->validate($request,bosyu::$rules);

        $bosyu = Bosyu::find($request->id);

        $bosyu_form = $request->all();
        unset($bosyu_form['_token']);

        $bosyu->fill($bosyu_form)->save();

        $history = new History;
        $history->bosyu_id = $bosyu->id;
        $history->edited_at = Carbon::now();
        $history->save();


        return redirect('member/bosyu/index');
    }
  
    public function index(Request $request)
    {


        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Bosyu::where('title',$cond_title)->get();
        } else {
            $posts = Bosyu::all();
        }
        return view('member.bosyu.index',['posts' => $posts, 'cond_title' => $cond_title]);
    }


    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $bosyu = Bosyu::find($request->id);
        // 削除する
        $bosyu->delete();
        return redirect('member/bosyu/index');
    }  

    public function comment()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('bosyu.index', ['posts' => $posts]);
    }

    public function show($bosyu_id)
    {
        $bosyu = Bosyu::find($bosyu_id);
        
        return view('member.bosyu.show',[
            'bosyu' => $bosyu,
        ]);
    }

}
