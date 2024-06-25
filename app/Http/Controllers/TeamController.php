<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::all()->sortDesc();
        return view('admin.team.index')->with('teams', $team);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create')->with([
            'teams' => Team::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);

        }

        Team::create([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'photo' => $path ?? null
        ]);

        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        return view('admin.team.show')->with([
            'team' => $team,
        ]);
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit')->with(['team' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        if ($request->hasFile('photo'))
        {
            if ($request->hasFile('photo'))
            {
                if (isset($team->photo))
                {
                    Storage::delete($team->photo);
                }

                $name = $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('post_photo', $name);
            }
        }

        $team->update([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'youtube' => $request->youtube,
            'photo' => $path ?? $team->name
        ]);

        return redirect()->route('team.index', ['teams' => $team->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $team->delete();
        if (isset($team->photo))
        {
            Storage::delete($team->photo);
        }
        return redirect()->route('team.index');
    }
}
