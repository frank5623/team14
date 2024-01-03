@extends('app')

@section('title', '建立遊戲表單')


@section('steam_contents')
    @include('message.list')
    {!! Form::open(['url' => 'games/store']) !!}
    @include('games.form', ['submitButtonText'=>"新增遊戲資料"])
    {!! Form::close() !!}
@endsection