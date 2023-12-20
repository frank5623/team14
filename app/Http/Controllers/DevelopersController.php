<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Developer;
class DevelopersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $developers = Developer::orderBy('id')->get()->toArray();
        return view('developers.index')->with('developers',$developers);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('developers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $country = $request->input('country');
        $found_date = $request->input('found_date');
        $founder = $request->input('founder');

        Developer::create([
            'name' => $name,
            'country' => $country,
            'found_date' => $found_date,
            'founder' => $founder
        ]);

        return redirect('developers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $developer = Developer::findOrFail($id);
        $game = $developer->games;
         // 把資料送給 view
         return view('developers.show', ['developer' => $developer, 'games'=>$game]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   
    {
        return Developer::FindOrFail($id);

        $developer = Developer::findOrFail($id);
        return view('developers.edit', ['developer'=>$developer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $developer = Developer::findOrFail($id);

        $developer->name = $request->input('name');
        $developer->country = $request->input('country');
        $developer->found_date = $request->input('found_date');
        $developer->founder = $request->input('founder');
        $developer->save();

        return redirect('developers/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $developer = Developer::findOrFail($id);
        $developer->delete();
        return redirect('developers');
    }
}
