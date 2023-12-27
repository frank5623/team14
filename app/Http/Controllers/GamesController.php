<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Developer;
use App\Http\Requests\CreateGameRequest;
class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $G = Game::paginate(5);
        return view("games.index")->with("games",$G);
    }

    public function senior()
    {
        // 從 Model 拿特定條件下的資料
        $games = Game::senior()->paginate(5);
        $id = Game::allPositions()->pluck('games.id', 'games.id');
        // 把資料送給 view
        return view('games.index', ['games' => $players, 'positions'=>$id, 'selectedPosition'=>null]);
    }
    public function id(Request $request)
    {
        $games = Game::id($request->input('pos'))->paginate(5);
        $id = Game::allid()->pluck('games.id', 'games.id');
        $selectedPosition = $request->input('pos');
        return view('games.index', ['games' => $games, 'id'=>$id, 'selectedPosition'=>$selectedPosition]);
    }    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $developers = Developer::orderBy('developers.id', 'asc')->pluck('developers.name', 'developers.id');
        return view('games.create', ['developers' =>$developers, 'developerSelected' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGameRequest $request)
    {
        $name = $request->input('name');
        $d_id = $request->input('d_id');
        $publisher = $request->input('publisher');
        $release_date = $request->input('release_date');
        $price = $request->input('price');
        $peak_player = $request->input('peak_player');
        $gametype = $request->input('gametype');

        $game = Game::create([
            'name'=>$name,
            'd_id'=>$d_id,
            'publisher'=>$publisher,
            'release_date'=>$release_date,
            'price'=>$price,
            'peak_player'=>$peak_player,
            'gametype'=>$gametype]);
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
        $Game = Game::findOrFail($id);

        return view("games.show")->with("game",$Game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        $developers = Developer::orderBy('developers.id', 'asc')->pluck('developers.name', 'developers.id');
        $selected_tags = $game->developer->id;
        return view('games.edit', ['game' =>$game, 'developers' => $developers, 'developerSelected' => $selected_tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateGameRequest $request, $id)
    {
        $game = Game::findOrFail($id);

        $game->name = $request->input('name');
        $game->d_id = $request->input('d_id');
        $game->publisher = $request->input('publisher');
        $game->release_date = $request->input('release_date');
        $game->price = $request->input('price');
        $game->peak_player = $request->input('peak_player');
        $game->gametype = $request->input('gametype');
        $game->save();

        return redirect('games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Game = Game::findOrFail($id);
        $Game->delete();
        return redirect('games');
    }
}
