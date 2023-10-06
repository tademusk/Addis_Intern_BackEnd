<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Music;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musicData = Music::all();

        foreach ($musicData  as $music) {
            $music->tumbnail = asset('public/' . $music->tumbnail);
            $music->audio = asset('storage/' . $music->audio);
        }

        return $musicData;
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
    public function store(StoreMusicRequest $request)
    {
        Music::create($request->validated());
        return response()->json("New music created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
         return $skill;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $akill->update($request->validated());
        return response()->json("Music updated succesfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        return response()->json("Music deleted succesfully!");
    }
}
