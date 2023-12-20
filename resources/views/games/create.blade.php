@extends('app')
@section('title','建立遊戲')

@section('game_content')
@include('list')
 {!! Form::open(['url'=>'games/store'])!!}
 @include('games.form',['$submitButtonText'=>'新增遊戲'])
 {!! Form::close() !!}
@endsection