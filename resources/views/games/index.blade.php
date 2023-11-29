@extends('app')

@section('title', 'steam網站 - 列出所有遊戲')

@section('steam_contents')

    <h1>遊戲列表</h1><br/>

<table border="1">
    <tr>
        <th>流水號(內部鍵)</th>
        <th>遊戲名</th>
        <th>發行商</th>
        <th>開發商(外部鍵)</th>
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
            <td>{{ $games[$i]["id"] }}</td>    
            <td>{{ $games[$i]["name"] }}</td>
            <td>{{ $games[$i]["publisher"] }}</td>
            <td>{{ $games[$i]["d_id"] }}</td>
            <td>{{ $games[$i]["release_date"] }}</td>
            <td>{{ $games[$i]["price"] }}</td>
            <td>{{ $games[$i]["peak_player"] }}</td>
            <td>{{ $games[$i]["gametype"] }}</td>
            <td><a href="{{ route('games.show', ['id'=>$games[$i]['id']]) }}">顯示</a></td>
            <td><a href="{{ route('games.edit', ['id'=>$games[$i]['id']]) }}">修改</a></td>
            <td>刪除</td>
        </tr>

    @endfor
</table>

@endsection