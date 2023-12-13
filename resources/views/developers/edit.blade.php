@extends('app')

@section('title', '編輯特定開發商')


@section('game_content')
    {!! Form::model($developer, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\DevelopersController@update', $developer->id]]) !!}
    @include('developers.form', ['submitButtonText'=>"更新遊戲資料"])
    {!! Form::close() !!}
@endsection
