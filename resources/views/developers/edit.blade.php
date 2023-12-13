@extends('app')

@section('title', '編輯特定開發商')

@section('nba_theme', '編輯中的開發商')

@section('game_contents')
    {!! Form::model($developer, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DevelopersController@update', $developer->id]]) !!}
    @include('developers.form', ['submitButtonText'=>"更新遊戲資料"])
    {!! Form::close() !!}
@endsection
