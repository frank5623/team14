
@extends('app')

@section('title', 'steam網站 - 顯示特定遊戲')

@section('steam_theme', '您所選取的遊戲資料')

@section('steam_contents')
<h1>顯示單一遊戲資料</h1>
遊戲編號：{{ $game->id }}<br/>
遊戲名稱：{{ $game->name }}<br/>
發行商：{{ $game->publisher }}<br/>
開發商鍵值：{{ $game->d_id }}<br/>
發行時間：{{ $game->release_date }}<br/>
價格：{{ $game->price }}<br/>
歷史尖峰人數：{{ $game->peak_player }}<br/>
遊戲類型：{{ $game->gametype }}<br/>
@endsection