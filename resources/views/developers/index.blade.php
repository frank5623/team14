<html>
<head>
    <title>開發商列表</title>
<head>
<body>
    <h1>開發商列表</h1><br/>

@for ($i = 0; $i < count($developers); $i++)
    {{ $developers[$i]["name"] }} <br/>
    {{ $developers[$i]["country"] }} <br/>
    {{ $developers[$i]["found_date"] }} <br/>
    {{ $developers[$i]["founder"] }} <br/><br/>
@endfor
</body>

</html>