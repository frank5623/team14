@extends('app')
@section('title','{{$game}}')
@section('game_content')    
    name：{{$developer['name']}} <br>
    country：{{$developer['country']}} <br>
    found_date：{{$developer['found_date']}}<br>
    founder：{{$developer['founder']}}
@endsection