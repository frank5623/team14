@extends('app')

@section('title', '編輯特定開發商')

@section('steam_theme', '編輯中的開發商')

@section('steam_contents')
    {!! Form::model($developer, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DevelopersController@update', $developer->id]]) !!}
    @include('developers.form', ['submitButtonText'=>'更新開發商資料'])
    {!! Form::close() !!}
@endsection