<html>
    <head>
    </head>
<body>

<table border=1 >
    <tr>
        <th>name</th>
        <th>publisher</th>
        <th>d_id</th>
        <th>release_date</th>
        <th>price</th>
        <th>peak_player</th>
        <th>gametype</th>
    </tr>
    <tr>
        <td> {{ $games[$id]["name"] }} </td>
        <td> {{ $games[$id]["publisher"] }}</td>
        <td>{{ $games[$id]["d_id"] }}</td>
        <td>{{ $games[$id]["release_date"] }}</td>
        <td>{{ $games[$id]["price"] }}</td>
        <td>{{ $games[$id]["peak_player"] }}</td> 
        <td> {{ $games[$id]["gametype"] }}</td>
    </tr>    
</table>
</body>
</html>