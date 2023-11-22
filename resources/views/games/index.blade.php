<html>
    <head>

    </head>
    <body>
        
        <table border=1 border-collapse=collapse>
        @for($i=0;$i<count($games);$i++)
        <th> Game name</th>
                <th> publisher</th>
                <th> release_date</th>
                <th> price</th>
                <th>peak_player</th>
                <th> gametype</th>
            <tr>

                <td>
            {{$games[$i]['name']}} 
                </td> 
                <td>
            {{$games[$i]['publisher']}} 
                </td> 
                <td>
            {{$games[$i]['release_date']}} 
                </td> 
                <td>
            {{$games[$i]['price']}} 
                </td> 
                <td>
            {{$games[$i]['peak_player']}} 
                </td> 
                <td>
            {{$games[$i]['gametype']}} 
                </td> 
            </tr>
            @endfor
        </table>

    </body>
</html>