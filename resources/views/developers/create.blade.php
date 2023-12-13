@extends('app')

@section('title', '建立開發商表單')

@section('steam_theme', '建立開發商的表單')

@section('steam_contents')
    {!! Form::open(['url' => 'developers/store']) !!}
    @include('developers.form', ['submitButtonText'=>'新增球隊資料'])
    {!! Form::close() !!}
@endsection