@extends('app')
@section('title','遊戲列表')
@section('game_content')    

    id：{{$game['id']}} <br>
    Game name：{{$game['name']}} <br>
    publisher：{{$game['publisher']}}<br>
    release_date：{{$game['release_date']}} <br>
    price：{{$game['price']}}<br>
    peak_player：{{$game['peak_player']}}<br>
    gametype：{{$game['gametype']}} <br>
@endsection