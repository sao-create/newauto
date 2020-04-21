<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Capture;
use Storage; //追加

class CaptureController extends Controller
{
    //
    public function add()
    {
        return view('member.capture.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Capture::$rules);

        $capture = new Capture;
        $capture_form = $request->all();

        
        // フォームから送信されてきた_tokenを削除する
        unset($capture_form['_token']);
        // データベースに保存する
        $capture->fill($capture_form);
        $capture->save();        

        return redirect('member/capture');
    }

    public function edit(Request $request)
    {
        $capture = Capture::find($request->id);
        if (empty($capture)) {
            abort(404);
        }
        return view('member.capture.edit',['capture_form' => $capture]);
    }

    public function update()
    {
        return redirect('member/capture/edit');
    }

    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Capture::where('title',$cond_title)->get();
        } else {
            $posts = Capture::all();
        }
        return view('member/capture/index',['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function show($capture_id)
    {
        $capture = Capture::find($capture_id);
        
        return view('member.capture.show',[
            'capture' => $capture]);
    }

    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $capture = capture::find($request->id);
        // 削除する
        $capture->delete();
        return redirect('member/capture/index');
    }  
}

