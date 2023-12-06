@extends('app')

@section('title', 'steam網站 - 列出所有開發商')

@section('steam_theme','選取的開發商列表')

@section('steam_contents')
流水號:{{ $developer->id }}<br/>
廠商名:{{ $developer->name }}<br/>
註冊國籍:{{ $developer->country }}<br/>
成立年份:{{ $developer->found_date }}<br/>
創辦人:{{ $developer->founder }}<br/>
@endsection