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
        $game = Game::orderBy('id')->get()->toArray();
        return view('games.index')->with('games',$game);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developers = Developer::orderBy('developers.id','asc')->pluck('developers.name','developers.id');
        return view('games.create',['developers'=>$developers,'developerSelected'=>null]);
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
            
            'd_id'=> $d_id,
            'publisher'=>$publisher,
            'release_date'=>$release_date,
            'price'=>$price,
            'peak_player'=>$peak_player,
            'gametype'=>$gametype,
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
         // 從 Model 拿資料
         $game = Game::findOrFail($id);
         // 把資料送給 view
         return view('games.show')->with('game', $game);    
        
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
        $developers = Developer::orderBy('developers.id','asc')->pluck('developers.name','developers.id');
        $tags = $game->developer->id;
        return view('games.edit',['game'=>$game,'developers'=>$developers,'teamSelected'=>$tags]);
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
