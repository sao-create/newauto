@extends('layouts.common')
@section('content')
<div class="container">
 <div class="row">
    <h2 class="captureindex"><i class="fas fa-dragon"></i>&nbsp;攻略一覧</h2>
 </div>
 <div class="row">
          <div class="col-md-4 p-5">
              <a href="{{ action('Member\CaptureController@add') }}" role="button" class="btn btn-primary">新規作成</a>
          </div>
 </div>
      <div class="row">
          <div class="list-news col-md-12 mx-auto">
              <div class="row">
                @foreach($posts as $capture)
                    <article class="col-md-5 mx-auto border p-3 mb-5">
                        <h2>{{ $capture->title, 100 }}</h2>
                        <p class="capturebody text-left">{!! nl2br(e(str_limit($capture->body, 200))) !!}
                          <a href="{{ action('Member\CaptureController@show',['capture' => $capture]) }}" role="button" class="btn btn-default　btn-xs">
                            <i class="fas fa-angle-double-right"></i>
                          </a>
                        </p>
                    </article>
                @endforeach
              </div>
          </div>
      </div>
@endsection