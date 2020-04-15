@extends('layouts.common')
@section('title','募集一覧')
@section('content')
<div class="container">
      <div class="row">
          <h2 class="bosyuindex"><i class="fas fa-dragon ml-3"></i>&nbsp;募集一覧</h2>
      </div>
      <div class="row">
          <div class="col-md-4 p-5">
              <a href="{{ action('Member\BosyuController@add') }}" role="button" class="btn btn-primary">新規作成</a>
          </div>
      </div>
      <div class="row">
          <div class="list-news col-md-12 mx-auto">
              <div class="row">
                @foreach($posts as $bosyu)
                    <article class="col-md-5 mx-auto border mb-4">
                        <h2 class="mt-3">{{ $bosyu->title, 100 }}</h2>
                        <p class="bosyu-rank text-left">ランク：{{ $bosyu->rank, 100 }}</p>
                        <p class="text-left">{!! nl2br(e(str_limit($bosyu->body, 200))) !!}
                          <a href="{{ action('Member\BosyuController@content',['bosyu' => $bosyu]) }}" role="button" class="btn btn-default　btn-xs">
                            <i class="fas fa-angle-double-right my-white"></i>
                          </a>
                        </p>
                        @if ($bosyu->comments->count())
                           <span class="badge badge-primary mb-3">
                             コメント {{ $bosyu->comments->count() }}件
                           </span>
                        @endif
                    </article>
                @endforeach
              </div>
          </div>
      </div>
  </div>
@endsection