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
            <td><a href="{{ route('games.show', ['id'=>$game->id]) }}">顯示</a></td>
            <td><a href="{{ route('games.edit', ['id'=>$game->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/games/delete', ['id' => $game->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection