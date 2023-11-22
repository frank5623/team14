<html>
<head>
    <title>遊戲列表</title>
<head>
<body>
    <h1>遊戲列表</h1><br/>

@for ($i = 0; $i < count($games); $i++)
    {{ $games[$i]["name"] }} <br/>
    {{ $games[$i]["publisher"] }} <br/>
    {{ $games[$i]["d_id"] }} <br/>
    {{ $games[$i]["release_date"] }} <br/>
    {{ $games[$i]["price"] }} <br/>
    {{ $games[$i]["peak_player"] }} <br/>
    {{ $games[$i]["gametype"] }} <br/> <br/>
@endfor
</body>

</html>