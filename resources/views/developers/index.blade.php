<html>
    <head>

    </head>
    <body>
        
        <table border=1 border-collapse=collapse>
                <th> name</th>
                <th> country</th>
                <th> found_date</th>
                <th>founder</th>
                <th>查詢</th>
                <th>修改</th>
                <th>刪除</th>
        @foreach($developers as $developer)

                
            <tr>
                <td>{{$developer['name']}} </td> 
                <td>{{$developer['country']}} </td> 
                <td>{{$developer['found_date']}} </td> 
                <td>{{$developer['founder']}} </td> 
                <td><a href="{{route('developers.show',['id'=>$developer['id']])}}">查詢</td>
                <td><a href="{{route('developers.edit',['id'=>$developer['id']])}}">修改</td>
                <td><a href="{{route('developers.delete',['id'=>$developer['id']])}}">刪除</td>
            </tr>
            @endforeach
        </table>

    </body>
</html>