<html>
    <head>

    </head>
    <body>
        
        <table border=1 border-collapse=collapse>
                <th> id</th>
                <th> Game name</th>
                <th> publisher</th> 
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
                <td>{{$game['release_date']}} </td> 
                <td>{{$game['price']}} </td> 
                <td>{{$game['peak_player']}} </td> 
                <td>{{$game['gametype']}} </td>
                <td><a href="{{route('games.show',['id'=>$game['id']])}}">查詢</td>
                <td><a href="{{route('games.edit',['id'=>$game['id']])}}">修改</td>
                <td><a href="{{route('games.delete',['id'=>$game['id']])}}">刪除</td>


            </tr>
            @endforeach
        </table>

    </body>
</html>