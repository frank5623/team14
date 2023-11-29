
@extends('app')

@section('title', 'steam網站 - 列出所有開發商列表')

@section('steam_contents')
<h1>列出所有開發商列表</h1><br/>
<table border=1>
    <tr>
        <th>流水號_id</th>
        <th>廠商名</th>
        <th>註冊國籍</th>
        <th>成立年份</th>
        <th>創辦人</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>


@for ($i = 0; $i < count($developers); $i++)
    <tr>
        <td> {{ $developers[$i]["id"] }} </td>
        <td> {{ $developers[$i]["name"] }}</td>
        <td>{{ $developers[$i]["country"] }}</td>
        <td>{{ $developers[$i]["found_date"] }}</td>
        <td>{{ $developers[$i]["founder"] }}</td>
        <td><a href="{{route('developers.show', ['id'=>$developers[$i]['id']]) }}">顯示</a></td>
        <td><a href="{{route('developers.edit', ['id'=>$developers[$i]['id']]) }}">修改</a></td>
        <td>刪除</td>
    </tr>
@endfor
<table>
@endsection
