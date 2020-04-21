@extends('layouts.common')
@section('title', '攻略記事詳細')

@section('content')
<div class="bosyu-page mb-4 ml-4 text-left">
    <a class="btn btn-primary" href="{{ action('Member\CaptureController@edit', ['id' => $capture->id]) }}">
        編集する
    </a>
    <form
        style="display: inline-block;"
        method="POST"
        action="{{ action('Member\CaptureController@delete', ['id' => $capture->id]) }}"
    >
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">削除する</button>
</div>

　　<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{ $capture->title }}
            </h1>
            <p class="mb-5 text-left">
                {!! nl2br(e($capture->body)) !!}
            </p>
         @csrf
        </div>
    </div>
@endsection




 