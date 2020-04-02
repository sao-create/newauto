
{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.common')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '募集新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
<div class="container">
        <div class="row">
                <h2>メンバー募集新規作成</h2>
                <div class="BosyuCreate">
                <form action="{{ action('Member\BosyuController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="BosyuForm">
                        <div class="form-group row">
                            <label class=BosyuTitle><i class="far fa-caret-square-right fa-2x"></i><span class="mgr-10">タイトル</span></label>
                            <div class="TitleSet">
                                <input type="text"  class="titleform" name="title" value="{{ old('title') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="BosyuRank"><i class="far fa-caret-square-right fa-2x"></i><span class="mgr-10">ランク</span></label>
                            <div class="RankSet">
                                <input class="form-controll form-controll-lg" name="rank" type="hidden" value="{{ old('rank') }}">
                            <select class="BosyuRank parent">
                                <option value="" class="msg" disabled selected>ランク帯を選択</option>
                                <option value="クイーン">クイーン</option>
                                <option value="キング">キング</option>
                                <option value="ルーク">ルーク</option>
                                <option value="ビショップ">ビショップ</option>
                                <option value="ナイト">ナイト</option>
                                <option value="ポーン">ポーン</option>
                                <option value="未知の駒">未知の駒</option>
                            </select>
                                
                            <select class="children" name="rank" disabled required>
                                <option value="" class="msg" desabled selected>クラスを選択</option>
                                <option value="クイーン" data-val="クイーン">クイーン</option>
                                <option value="キング1" data-val="キング">キング1</option>
                                <option value="キング2" data-val="キング">キング2</option>
                                <option value="キング3" data-val="キング">キング3</option>
                                <option value="ルーク1" data-val="ルーク">ルーク1</option>
                                <option value="ルーク2" data-val="ルーク">ルーク2</option>
                                <option value="ルーク3" data-val="ルーク">ルーク3</option>
                                <option value="ルーク4" data-val="ルーク">ルーク4</option>
                                <option value="ルーク5" data-val="ルーク">ルーク5</option>
                                <option value="ルーク6" data-val="ルーク">ルーク6</option>
                                <option value="ルーク7" data-val="ルーク">ルーク7</option>
                                <option value="ルーク8" data-val="ルーク">ルーク8</option>
                                <option value="ルーク9" data-val="ルーク">ルーク9</option>
                                <option value="ビショップ1" data-val="ビショップ">ビショップ1</option>
                                <option value="ビショップ2" data-val="ビショップ">ビショップ2</option>
                                <option value="ビショップ3" data-val="ビショップ">ビショップ3</option>
                                <option value="ビショップ4" data-val="ビショップ">ビショップ4</option>
                                <option value="ビショップ5" data-val="ビショップ">ビショップ5</option>
                                <option value="ビショップ6" data-val="ビショップ">ビショップ6</option>
                                <option value="ビショップ7" data-val="ビショップ">ビショップ7</option>
                                <option value="ビショップ8" data-val="ビショップ">ビショップ8</option>
                                <option value="ビショップ9" data-val="ビショップ">ビショップ9</option>
                                <option value="ナイト1" data-val="ナイト">ナイト1</option>
                                <option value="ナイト2" data-val="ナイト">ナイト2</option>
                                <option value="ナイト3" data-val="ナイト">ナイト3</option>
                                <option value="ナイト4" data-val="ナイト">ナイト4</option>
                                <option value="ナイト5" data-val="ナイト">ナイト5</option>
                                <option value="ナイト6" data-val="ナイト">ナイト6</option>
                                <option value="ナイト7" data-val="ナイト">ナイト7</option>
                                <option value="ナイト8" data-val="ナイト">ナイト8</option>
                                <option value="ナイト9" data-val="ナイト">ナイト9</option>
                                <option value="ポーン1" data-val="ポーン">ポーン1</option>
                                <option value="ポーン2" data-val="ポーン">ポーン2</option>
                                <option value="ポーン3" data-val="ポーン">ポーン3</option>
                                <option value="ポーン4" data-val="ポーン">ポーン4</option>
                                <option value="ポーン5" data-val="ポーン">ポーン5</option>
                                <option value="ポーン6" data-val="ポーン">ポーン6</option>
                                <option value="ポーン7" data-val="ポーン">ポーン7</option>
                                <option value="ポーン8" data-val="ポーン">ポーン8</option>
                                <option value="ポーン9" data-val="ポーン">ポーン9</option>
                                <option value="未知の駒" data-val="未知の駒">未知の駒</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group row">
                                <lavel class="BosyuCode"><i class="far fa-caret-square-right fa-2x"></i><span class="mgr-10">フレンドコード</span></lavel>
                                <input type="text" class="codeform" name="code" value="{{ old('code') }}">
                            </div>
                            <div class="form-group row">
                                <label class="BosyuMain"><i class="far fa-caret-square-right fa-2x"></i><span class="mgr-10">本文</span></label>
                                <div class="MainSet">
                                    <textarea class="bodyform" name="body" rows="20"></textarea>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="募集する">
                </form>
                    </div>
            </div>
        </div>
</div>
@endsection
