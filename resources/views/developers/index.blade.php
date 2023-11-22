<html>
    <head>

    </head>
    <body>
        
        <table border=1 border-collapse=collapse>
        @for($i=0;$i<count($developers);$i++)
                <th> name</th>
                <th> country</th>
                <th> found_date</th>
                <th>founder</th>
            <tr>

                <td>
            {{$developers[$i]['name']}} 
                </td> 
                <td>
            {{$developers[$i]['country']}} 
                </td> 
                <td>
            {{$developers[$i]['found_date']}} 
                </td> 
                <td>
            {{$developers[$i]['founder']}} 
                </td> 

            </tr>
            @endfor
        </table>

    </body>
</html>