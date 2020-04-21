@extends('layouts.common')
@section('title', '攻略記事新規作成')

@section('content')
<div class="container">
  <div class="row">
   <h2 class="capture-create"><i class="fas fa-dragon"></i>&nbsp;攻略記事新規作成</h1>

     <div class="col-md-8 mx-auto">
       <form action="{{ action('Member\CaptureController@create') }}" method="post" enctype="multipart/form-data">
          @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                @endforeach
              </ul>
          @endif

         <div class="form-group row">
           <lavel class="col-md-2">タイトル</lavel>
           <div class="col-md-10">
             <input type="text" class="form-controll" name="title" value="{{ old('title') }}">
           </div>
         </div>

         <div class="form-group row">
           <lavel class="col-md-2">本文</lavel>
            <div class="col-md-10">
              <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
            </div>
         </div>

         {{ csrf_field() }}

         <input type="submit" class="btn btn-primary mb-3" value="投稿する">
　　　  </form>
    </div>

  </div>
</div>
@endsection
