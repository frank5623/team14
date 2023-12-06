@extends('app')
@section('title','{{$game}}')
@section('game_content')    
    name：{{$developer['name']}} <br>
    country：{{$developer['country']}} <br>
    found_date：{{$developer['found_date']}}<br>
    founder：{{$developer['founder']}}
    <table border=1 border-collapse=collapse>
                <th> id</th>
                <th> Game name</th>
                <th> publisher</th> 
                <th>developer</th>
                <th> release_date</th>
                <th> price</th>
                <th>peak_player</th>
                <th> gametype</th>
        @foreach($games as $game)
            <tr>

                <td>{{$game['id'  ]}}</td>  
                <td>{{$game['name']}} </td> 
                <td>{{$game['publisher']}} </td> 
                <td>{{$game['d_id']}}</td>
                <td>{{$game['release_date']}} </td> 
                <td>{{$game['price']}} </td> 
                <td>{{$game['peak_player']}} </td> 
                <td>{{$game['gametype']}} </td>


            </tr>
            @endforeach

        </table>
@endsection