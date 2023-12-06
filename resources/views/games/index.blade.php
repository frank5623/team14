
@extends('app')

@section('title', 'steam網站 - 列出所有遊戲列表')

@section('steam_contents')

<h1>列出所有遊戲列表</h1><br/>
<table border=1>
    <tr>
        <th>遊戲名</th>
        <th>發行商</th>
        <th>開發商_id</th>
        <th>發行時間</th>
        <th>價錢(TWD)</th>
        <th>歷史尖峰人數</th>
        <th>遊戲類型</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>

    @for ($i = 0; $i < count($games); $i++)
    <tr>
        <td> {{ $games[$i]["name"] }} </td>
        <td> {{ $games[$i]["publisher"] }}</td>
        <td>{{ $games[$i]["d_id"] }}</td>
        <td>{{ $games[$i]["release_date"] }}</td>
        <td>{{ $games[$i]["price"] }}</td>
        <td>{{ $games[$i]["peak_player"] }}</td> 
        <td> {{ $games[$i]["gametype"] }}</td>
        <td><a href="{{route('games.show', ['id'=>$games[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{route('games.edit', ['id'=>$games[$i]['id']]) }}">修改</a></td>
        <td>
            <form action="{{ url('/games/delete', ['id'=>$games[$i]['id']]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                 @csrf
            </form>
        </td>
    </tr>
    @endfor
<table>
@endsection
