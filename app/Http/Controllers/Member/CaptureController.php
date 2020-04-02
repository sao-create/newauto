<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaptureController extends Controller
{
    //
    public function add()
    {
        return view('member.capture.create');
    }
    
    public function create()
    {
        return redirect('member/capture/create');
    }

    public function edit()
    {
        return view('member.capture.edit');
    }

    public function update()
    {
        return redirect('member/capture/edit');
    }

    public function index()
    {
        return view('member/capture/index');
    }
}
