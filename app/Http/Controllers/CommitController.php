<?php

namespace App\Http\Controllers;

use App\Models\Commit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Symfony\Component\Translation\t;

class CommitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commit = Commit::all()->sortDesc();
        return view('admin.commit.index')->with('commits', $commit);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.commit.create')->with([
            'commits' => Commit::all(),
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

        Commit::create([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? null
        ]);

        return redirect()->route('commit.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commit $commit)
    {
        return view('admin.commit.show')->with([
            'commits' => $commit,
        ]);
    }

    public function edit(Commit $commit)
    {
        return view('admin.commit.edit')->with(['commit' => $commit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Commit $commit)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($commit->photo))
            {
                Storage::delete($commit->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $commit->update([
            'name' => $request->name,
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path ?? $commit->name
        ]);

        return redirect()->route('commit.index', ['commits' => $commit->id]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commit $commit)
    {
        $commit->delete();
        if (isset($commit->photo))
        {
            Storage::delete($commit->photo);
        }
        return redirect()->route('commit.index');
    }
}
