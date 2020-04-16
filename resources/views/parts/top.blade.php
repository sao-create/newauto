@extends('layouts.common')
@section('content')
<div class="container">
  <div id="row-1st">
    <div class="parent">
        <div class="box2">
          <h2>AUTO CHESS ORIGINで仲間と戦おう</h2>
          <p>フレンドを探してランクマッチ<デュオモード>で遊ぼう！</p>
        </div>
        <div class="button">
          <a href="{{ action('Member\BosyuController@index') }}"><p class="topbutton"><i class="fas fa-search"></i>仲間を探す</p></a>
          <div class="img"><img src="https://cdn.pixabay.com/photo/2018/04/16/15/52/chess-3325010_960_720.jpg"></div>
        </div>
    </div>
  </div>  
  <div id="row-1st">
    <div class="parent">
      <div class="box2">
        <h2>AUTO CHESS ORIGINを攻略する</h2>
        <p>自分の攻略記事を投稿して意見交換してみよう！</p>
      </div>
      <div class="button">
        <a href="{{ action('Member\CaptureController@index') }}"><p class="topbutton"><i class="far fa-clipboard"></i>攻略掲示板へ</p></a>
        <div class="img"><img src="https://cdn.pixabay.com/photo/2018/08/18/21/54/chess-3615548_960_720.jpg" align="middle"></div>
      </div>
    </div>
  </div>  
  </div>
</div>
  <div class="guest">
    <br>
    <h4>ようこそゲストさん</h4>
    <p>記事の投稿には会員登録が必要です</p>
    <div class="button">
      <button class="topbutton"　href="{{ action('HomeController@add') }}">
          　新規登録
      </button>
    </div>
  </div>
  </div>
@endsection


