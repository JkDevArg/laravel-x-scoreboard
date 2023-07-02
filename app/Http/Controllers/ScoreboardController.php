<?php

namespace App\Http\Controllers;

use App\Models\Scoreboard;
use Illuminate\Http\Request;

class ScoreboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scoreboards = Scoreboard::all();
        return view('scoreboards.index', ['scoreboards' => $scoreboards]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Scoreboard::create([
            'teamA' => $request->teamA,
            'teamB' => $request->teamB,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Scoreboard $scoreboard)
    {
        return view('scoreboards.show', ['scoreboard' => $scoreboard]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Scoreboard $scoreboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scoreboard $scoreboard)
    {
        $scoreboard->delete();
        return redirect()->back();
    }
}
