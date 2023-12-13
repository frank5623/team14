@extends('app')
@section('title','建立開發商')
@section('game_content')
 {!! Form::open(['url'=>'developers/store'])!!}
 @include('developers.form',['$submitButtonText'=>'新增遊戲'])
 {!! Form::close() !!}
@endsection