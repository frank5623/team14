
@extends('app')

@section('title', 'steam網站 - 顯示特定開發商')

@section('steam_theme', '您所選取的開發商資料')

@section('steam_contents')

<h1>顯示單一開發商資料</h1>
        
流水號_id：{{ $developer->id }}<br/>
廠商名：{{ $developer->name }}<br/>
註冊國籍：{{ $developer->country }}<br/>
成立年份：{{ $developer->found_date }}<br/>
創辦人：{{ $developer->founder }}<br/>


<h1>顯示開發商--發行遊戲資料</h1>
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
        <td>  
            <form action="{{ url('/developers/delete', ['id'=>$developers[$i]['id']]) }}" method="post">
                <input class="btn btn-default" type="submit" value="刪除" />
                @method('delete')
                 @csrf
            </form>
        </td>
    </tr>
@endfor
<table>
@endsection