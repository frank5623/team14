@extends('app')

@section('title', '編輯特定遊戲資料')

@section('steam_theme', '編輯中的遊戲資料')

@section('steam_contents')
    @include('message.list')
    {!! Form::model($game, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\GamesController@update', $game->id]]) !!}
    @include('games.form', ['submitButtonText'=>"更新遊戲資料"])
    {!! Form::close() !!}
@endsection