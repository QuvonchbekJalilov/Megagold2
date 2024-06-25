<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $link = Link::all()->sortDesc();
        return view('admin.link.index')->with('links', $link);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.link.create')->with([
            'links' => Link::all(),
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

        Link::create([
            'link' => $request->link,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'photo' => $path ?? null,
        ]);

        return redirect()->route('link.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Link $link)
    {
        return view('admin.link.edit')->with(['link' => $link]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Link $link)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($link->photo))
            {
                Storage::delete($link->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $link->update([
            'link' => $request->link,
            'telegram' => $request->telegram,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'photo' => $path ?? $link->photo,
        ]);

        return redirect()->route('link.index', ['links' => $link->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();
        if (isset($link->photo))
        {
            Storage::delete($link->photo);
        }
        return redirect()->route('link.index');
    }
}
