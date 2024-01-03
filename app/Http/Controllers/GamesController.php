<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGamesRequest;
use App\Models\Game;
use App\Models\Developer;
use Illuminate\Http\Request;


class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::orderBy('id')->paginate(25);
        return view('games.index')->with('games',$games);
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Developer::orderBy('developers.id','asc')->pluck('developers.name','developers.id');
        return view('games.create',['developers'=>$developers,'teamSelected'=>null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGamesRequest $request)
    {
        $name = $request->input('name');
        $id = $request->input('d_id');
        $publisher = $request->input('publisher');
        $release_date = $request->input('release_date');
        $price = $request->input('price');
        $peak_player = $request->input('peak_player');
        $game_type = $request->input('gametype');
        $game = Game::create([
            'name'=>$name,
            'd_id' => $id,
            'publisher' => $publisher,
            'release_date' => $release_date,
            'price' => $price,
            'peak_player' => $peak_player,
            'gametype' => $game_type,   
        ]);

        return redirect('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::FindOrFail($id);
        return view('games.show',['game'=>$game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        parent::edit($id);
        $game = Game::FindOrFail($id);
        $developers = Developer::orderBy('developers.id','desc')->pluck('developers.name','developers.id');
        $tags = $game->developer->id;

        return view('games.edit',['game'=>$game,'developers'=>$developers,'teamSelected'=>$tags]);
    }

    public function popular(Request $request)
    {
        $number = $request->input('number');
        $games = Game::Popular($number)->paginate(25);
        return view('games.index')->with('games',$games);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateGamesRequest $request, $id)
    {
        $game = Game::findorFail($id);
        $game->name = $request->input('name');
        $game->d_id = $request->input('d_id'); 
        $game->publisher = $request->input('publisher');
        $game->release_date = $request->input('release_date');
        $game->price = $request->input('price');
        $game->peak_player = $request->input('peak_player');
        $game->gametype = $request->input('gametype');
        $game->save();
        return redirect('games/'.$id);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect('games');
    }
}
