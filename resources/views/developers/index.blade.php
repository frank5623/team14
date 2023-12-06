@extends('app')

@section('title', 'steam網站 - 列出所有開發商')

@section('steam_contents')

    <h1>開發商列表</h1><br/>
    <table border="1">
    <tr>
        <th>流水號(內部鍵)</th>
        <th>廠商名</th>
        <th>註冊國籍</th>
        <th>成立年份</th>
        <th>創辦人</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
    </tr>    

    @foreach($developers as $developer)

        <tr>
            <td>{{ $developer->id }}</td>    
            <td>{{ $developer->name }}</td>
            <td>{{ $developer->country }}</td>
            <td>{{ $developer->found_date }}</td>
            <td>{{ $developer->founder }}</td>
            <td><a href="{{ route('developers.show', ['id'=>$developer->id]) }}">顯示</a></td>
            <td><a href="{{ route('developers.edit', ['id'=>$developer->id]) }}">修改</a></td>
            <td>
                <form action="{{ url('/developers/delete', ['id' => $developer->id]) }}" method="post">
                    <input class="btn btn-default" type="submit" value="刪除" />
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection