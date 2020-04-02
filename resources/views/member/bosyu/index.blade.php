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
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="10%">タイトル</th>
                                <th width="15%">ランク</th>
                                <th width="40%">本文</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $bosyu)
                                <tr>
                                    <th>{{ $bosyu->id }}</th>
                                    <td>{{ $bosyu->title, 100 }}</td>
                                    <td>{{ $bosyu->rank, 100 }}</td>
                                    <td>{!! nl2br(e(str_limit($bosyu->body, 200))) !!}
                                        <a href="{{ action('Member\BosyuController@show', ['bosyu' => $bosyu]) }}" role="button" class="btn btn-default　btn-xs">
                                    　　　　<i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </td>

                                    <td>
                                    @if ($bosyu->comments->count())
                                         <span class="badge badge-primary">
                                            コメント {{ $bosyu->comments->count() }}件
                                         </span>
                                    @endif
 
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
@endsection