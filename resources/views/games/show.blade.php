@extends('app')

@section('title', 'steam網站 - 列出所有開發商')

@section('steam_theme','選取的遊戲列表')

@section('steam_contents')
流水號:{{ $game->id }}<br/>
遊戲名:{{ $game->name }}<br/>
發行商:{{ $game->publisher }}<br/>
開發商(外部建):{{ $game->d_id }}<br/>
發行時間:{{ $game->release_date }}<br/>
價錢(TWD):{{ $game->price }}<br/>
歷史尖峰人數:{{ $game->peak_player }}<br/>
遊戲類型:{{ $game->gametype }}<br/>
@endsection