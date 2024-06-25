<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $image = Image::all()->sortDesc();
        return view('admin.image.index')->with('images', $image);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.image.create')->with([
            'images' => Image::all(),
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

        Image::create([
            'photo' => $path ?? null,
        ]);

        return redirect()->route('image.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Image $image)
    {
        return view('admin.image.edit')->with(['images' => $image]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image $image)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($image->photo))
            {
                Storage::delete($image->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('post_photo', $name);
        }

        $image->update([
            'photo' => $path ?? $image->photo,
        ]);

        return redirect()->route('image.index', ['images' => $image->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image $image)
    {
        $image->delete();
        if (isset($image->photo))
        {
            Storage::delete($image->photo);
        }
        return redirect()->route('image.index');
    }
}
