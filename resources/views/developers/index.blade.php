
@extends('app')

@section('title', 'steam網站 - 列出所有開發商列表')

@section('steam_contents')
<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
    @can('admin')
    <a href="{{ route('developers.create') }} ">新增開發商</a>
    @endcan
    
    <a href="{{ route('developers.index') }} ">所有開發商</a>
</div>
<table border=1>
    <tr>
        <th>ID</th>
        <th>廠商名</th>
        <th>註冊國籍</th>
        <th>成立年份</th>
        <th>創辦人</th>
        <th>操作1</th>
        @can('admin')
        <th>操作2</th>
        <th>操作3</th>
        @elsecan('manager')
        <th>操作2</th>
        @endcan
    </tr>


    @foreach($developers as $developer)
    <tr>
                <td>{{$developer['id']}}</td>
                <td>{{$developer['name']}} </td> 
                <td>{{$developer['country']}} </td> 
                <td>{{$developer['found_date']}} </td> 
                <td>{{$developer['founder']}} </td> 
                <td><a href="{{route('developers.show',['id'=>$developer['id']])}}">顯示</td>
                @can('admin')
                <td><a href="{{route('developers.edit',['id'=>$developer['id']])}}">修改</td>
                <td>
                    <form action="{{url('/developers/delete',['id'=>$developer['id']])}}" method="post">
                    <input class="btn btn-default" type ="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </td>
                @elsecan('manager')
                <td><a href="{{ route('$developers.edit', ['id'=>$developer->id]) }}">修改</a></td>    
                @endcan
            </tr>
            @endforeach
        </table>
@endsection