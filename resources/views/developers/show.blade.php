
@extends('app')

@section('title', 'steam網站 - 顯示特定開發商')

@section('steam_theme', '您所選取的開發商資料')

@section('steam_contents')

<h1>顯示單一開發商資料</h1>
        
流水號:{{ $developer->id }}<br/>
廠商名：{{ $developer->name }}<br/>
註冊國籍：{{ $developer->country }}<br/>
成立年份：{{ $developer->found_date }}<br/>
創辦人：{{ $developer->founder }}<br/>


<h1>列出所有開發商列表</h1><br/>
<table border="1">
    <tr>
        <th>流水號</th>
        <th>遊戲名</th>
        <th>發行商</th>
        <th>開發商</th>
        <th>發行時間</th>
        <th>價錢(TWD)</th>
        <th>歷史尖峰人數</th>
        <th>遊戲類型</th>
    </tr>    

    @foreach($games as $game)

        <tr>
            <td>{{ $game->id }}</td>    
            <td>{{ $game->name }}</td>
            <td>{{ $game->publisher }}</td>
            <td>{{ $game->developer->name }}</td>
            <td>{{ $game->release_date }}</td>
            <td>{{ $game->price }}</td>
            <td>{{ $game->peak_player }}</td>
            <td>{{ $game->gametype }}</td>
        </tr>
    @endforeach
</table>
@endsection