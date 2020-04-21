@extends('layouts.common')
@section('title','攻略記事編集')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>募集内容編集</h2>
      <form action="{{ action('Member\CaptureController@update') }}" method="post" enctype="multipart/form-data">
        @if (count($errors) > 0)
           <ul>
             @foreach($errors->all() as $e)
               <li>{{ $e }}</li>
             @endforeach
           </ul>
        @endif
        <div class="form-group row">
           <lavel　class="col-md-2" for="title">タイトル</lavel>
           <div class="col-md-10">
              <input type="text"  class="form-control" name="title" value="{{ $capture_form->title }}">
           </div>
        </div>
        <div class="form-group row">
          <lavel class="col-md-10" for="body">募集内容</lavel>
            <textarea class="form-controll" name="body" rows="20">{{ $capture_form->body }}</textarea>
        </div>
        <div class="form-group row">
          <div class="col-md-10">
            <input type="hidden" name="id" value="{{ $capture_form->id }}">
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </div>
        </div>
      </form>
    </div>
  </div>      
</div>
@endsection