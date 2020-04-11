@extends('layouts.common')
@section('title', '募集詳細')

@section('content')
<div class="mb-4 text-right">
    <a class="btn btn-primary" href="{{ action('Member\BosyuController@edit', ['id' => $bosyu->id]) }}">
        編集する
    </a>
    <form
        style="display: inline-block;"
        method="POST"
        action="{{ action('Member\BosyuController@delete', ['id' => $bosyu->id]) }}">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">削除する</button>
</form>
</div>



　　<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{ $bosyu->title }}
            </h1>

            <p class="mb-5">
                {!! nl2br(e($bosyu->body)) !!}
            </p>
      
    <form class="mb-4" method="POST" action="{{ route('comments.store') }}">
    @csrf

    <input
        name="bosyu_id"
        type="hidden"
        value="{{ $bosyu->id }}">
    <div class="form-group">
        <label for="body">
            本文
        </label>
        <textarea
            id="body"
            name="body"
            class="form-control {{ $errors->has('body') ? 'is-invalid' : '' }}"
            rows="4">{{ old('body') }}
        </textarea>
        @if ($errors->has('body'))
            <div class="invalid-feedback">
                {{ $errors->first('body') }}
            </div>
        @endif
    </div>
    <div class="mt-4">
        <button type="submit" class="btn btn-primary btn-xs">
            コメントする
        </button>
    </div>
</form>


     <section>
      <h2 class="h5 mb-4"> コメント</h2>

      @forelse($bosyu->comments as $comment)
                    <div class="border-top p-4">
                        <time class="text-secondary">
                            {{ $comment->created_at->format('Y.m.d H:i') }}
                        </time>
                        <p class="mt-2">
                            {!! nl2br(e($comment->body)) !!}
                        </p>
                    </div>
                @empty
                    <p>コメントはまだありません。</p>
                @endforelse
            </section>
        </div>
    </div>
@endsection




 