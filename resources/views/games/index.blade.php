@extends('app')
@section('title','遊戲列表')
@section('game_content')
        <table border=1 border-collapse=collapse class='table-spacing'>
                <th> id</th>
                <th> Game name</th>
                <th> publisher</th> 
                <th>developer</th>
                <th> release_date</th>
                <th> price</th>
                <th>peak_player</th>
                <th> gametype</th>
                <th>查詢</th>
                <th>修改</th>
                <th>刪除</th>
        @foreach($games as $game)
            <tr>
                <td>{{$game['id'  ]}}</td>  
                <td>{{$game['name']}} </td> 
                <td>{{$game['publisher']}} </td> 
                <td>{{$game['d_id']}}</td>
                <td>{{$game['release_date']}} </td> 
                <td>{{$game['price']}} </td> 
                <td>{{$game['peak_player']}} </td> 
                <td>{{$game['gametype']}} </td>
                <td class='no-break'><a href="{{route('games.show',['id'=>$game['id']])}}">查詢</td>
                <td class='no-break'><a href="{{route('games.edit',['id'=>$game['id']])}}">修改</td>
                <td><form action="{{url('/games/delete',['id'=>$game['id']])}}" method="post">
                    <input class="btn btn-default" type ="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </td>   


            </tr>
            @endforeach

        </table>
@endsection