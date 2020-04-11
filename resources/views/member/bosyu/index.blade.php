@extends('layouts.common')
@section('title','募集一覧')
@section('content')
<div class="container">
      <div class="row">
          <h2>募集一覧</h2>
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
                    <article class="col-md-5 mx-auto border p-3 mb-5">
                        <h2>{{ $bosyu->title, 100 }}</h2>
                        <p class="bosyu-rank">ランク：{{ $bosyu->rank, 100 }}</p>
                        <p>{!! nl2br(e(str_limit($bosyu->body, 200))) !!}
                          <a href="{{ action('Member\BosyuController@show') }}" role="button" class="btn btn-primary">新規作成</a>
                        </p>
                        @if ($bosyu->comments->count())
                           <span class="badge badge-primary">
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