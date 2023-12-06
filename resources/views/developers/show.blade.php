@extends('app')
@section('title','{{$game}}')
@section('game_content')    
        <table border=1 border-collapse=collapse>
                <th> name</th>
                <th> country</th>
                <th> found_date</th>
                <th>founder</th>   
            <tr>
                <td>{{$developer['name']}} </td> 
                <td>{{$developer['country']}} </td> 
                <td>{{$developer['found_date']}} </td> 
                <td>{{$developer['founder']}} </td> 
            </tr>
        </table>
@endsection