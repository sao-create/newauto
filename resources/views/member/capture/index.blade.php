@extends('layouts.common')
@section('content')
<div class="indexmain">
    <h2>攻略一覧</h2>
    <a href="{{ action('Member\BosyuController@add') }}" role="button" class="btn btn-primary">新規作成</a>
    <input type="submit" class="btn btn-primary" value="検索">
 　　<div class="indextable">
      <li>ID</li>
      <li>タイトル</li>
      <li>ランク</li>
      <li>本文</li>
      <li>画像</li>
    </div>

</div>
@endsection