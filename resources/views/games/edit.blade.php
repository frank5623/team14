@extends('app')

@section('title', '編輯特定遊戲')

@section('steam_theme', '編輯中的遊戲')

@section('steam_contents')
    {!! Form::model($games, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\GamesController@update', $games->id]]) !!}
    @include('games.form', ['submitButtonText'=>"更新遊戲資料"])
    {!! Form::close() !!}
@endsection