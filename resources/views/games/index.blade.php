@extends('app')
@section('title','遊戲列表')
@section('game_content')
        @can('admin')
        <a href  = "{{route('games.create')}}">新增遊戲
        @endcan
        <a href = "{{route('games.index')}}">所有遊戲
        <br>
        <form action="{{url('/games/popular')}}" method="GET">
                    {!! Form::label('number','最小熱門遊戲人數數量:') !!}
                    {!! Form::text('number','2000') !!}
                    <input class="btn btn-default" type ="submit" value="查詢" />
                    @csrf
        </form>
        <br>
        <table border=1 border-collapse=collapse class='table-spacing'>
                <th> id</th>
                <th> Game name</th>
                <th> publisher</th> 
                <th>developer</th>
                <th> release_date</th>
                <th> price</th>
                <th>peak_player</th>
                <th> gametype</th>
                <th >查詢</th>
                @can('admin')
                <th>修改</th>
                <th>刪除</th>
                @elsecan('MOD')
                <th>修改</th>
                @endcan
        @foreach($games as $game)
            <tr>
                <td>{{$game->id}}</td>  
                <td>{{$game->name}} </td> 
                <td>{{$game->publisher}} </td> 
                <td>{{$game->developer->name}}</td>
                <td>{{$game->release_date}} </td> 
                <td>{{$game->price}} </td> 
                <td>{{$game->peak_player}} </td>   
                <td>{{$game->gametype}} </td>
                <td class='no-break exampleone'><a href="{{route('games.show',['id'=>$game->id])}}">查詢</td>
                @can('admin')
                <td class='no-break exampleone'><a href="{{route('games.edit',['id'=>$game->id])}}">修改</td>
                <td><form action="{{url('/games/delete',['id'=>$game->id])}}" method="post">
                    <input class="btn btn-default" type ="submit" value="刪除" />
                    @method('delete')
                    @csrf
                @elsecan('MOD')
                <td class='no-break'><a href="{{route('games.edit',['id'=>$game->id])}}">修改</td>
                @endcan
                </form>
                </td>   


            </tr>
            @endforeach

        </table>
        {{$games->withQueryString()->links()}}
@endsection