<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Capture;

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
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $capture->image_path = basename($path);
        } else {
            $capture->image_path = null;
        }
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
        // データベースに保存する
        $capture->fill($form);
        $capture->save();        

        return redirect('member/capture');
    }

    public function edit()
    {
        return view('member.capture.edit');
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
}

