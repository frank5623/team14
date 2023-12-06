@extends('app')
@section('title','開發商列表')
@section('game_content')
        <table border=1 border-collapse=collapse class='table-spacing'>
                <th> id</th>
                <th> name</th>
                <th> country</th>
                <th> found_date</th>
                <th>founder</th>
                <th>查詢</th>
                <th>修改</th>
                <th>刪除</th>
        @foreach($developers as $developer)
            <tr>
                <td>{{$developer['id']}}</td>
                <td>{{$developer['name']}} </td> 
                <td>{{$developer['country']}} </td> 
                <td>{{$developer['found_date']}} </td> 
                <td>{{$developer['founder']}} </td> 
                <td><a href="{{route('developers.show',['id'=>$developer['id']])}}">查詢</td>
                <td><a href="{{route('developers.edit',['id'=>$developer['id']])}}">修改</td>
                <td>
                    <form action="{{url('/developers/delete',['id'=>$developer['id']])}}" method="post">
                    <input class="btn btn-default" type ="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </td>
            </tr>
            @endforeach
        </table>
@endsection