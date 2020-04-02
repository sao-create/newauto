@extends('layouts.common')
@section('content')

　<div class="parent">
    <div class="img"><img src="https://cdn.pixabay.com/photo/2018/04/16/15/52/chess-3325010_960_720.jpg" align="middle">フレンドを探してランクマッチ<デュオモード>で遊ぼう！</div>
    <h2>AUTO CHESS ORIGINで仲間と戦おう</h2>
    <a href="{{ action('Member\BosyuController@index') }}"><p class="topbutton"><i class="fas fa-search"></i>仲間を探す</p></a>
  </div>
  <div class="parent">
    <div class="img"><img src="https://cdn.pixabay.com/photo/2018/08/18/21/54/chess-3615548_960_720.jpg" align="middle">自分の攻略記事を投稿して意見交換してみよう！</div>
    <h2>AUTO CHESS ORIGINを攻略する</h2>
    <a href="{{ action('Member\CaptureController@index') }}"><p class="topbutton"><i class="far fa-clipboard"></i>攻略掲示板へ</p></a>
  </div>

  <div class="parent2">
    <img src="" alt="">
    <h4>ようこそゲストさん</h4>
    　<p>記事の投稿には会員登録が必要です</p>
  </div>
  
  <div class="parent3">
    <h3>募集中一覧</h3>
    <div class="bosyuindex">
      <p></p>
    </div>

    <h3>人気記事</h3>
    <div class="captureindex">
      <p></p>
    </div>
  </div>


@endsection


