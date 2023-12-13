@extends('app')

@section('title', '編輯特定球員')

@section('nba_theme', '編輯中的球員')

@section('game_contents')
    {!! Form::model($game, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\GamesController@update', $game->id]]) !!}
    @include('games.form', ['submitButtonText'=>"更新遊戲資料"])
    {!! Form::close() !!}
@endsection
