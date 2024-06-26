<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $name = $request->file('photo')->getClientOriginalName();
            $path1 = $request->file('photo')->storeAs('post_photo', $name);

        }


        banner::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path1 ?? null,

        ]);

        return redirect()->route('banner.index')->with('success', 'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(banner $banner)
    {
        return view('admin.banner.show', compact('banner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banner $banner)
    {
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banner $banner)
    {
        if ($request->hasFile('photo'))
        {
            if (isset($banner->photo))
            {
                Storage::delete($banner->photo);
            }

            $name = $request->file('photo')->getClientOriginalName();
            $path1 = $request->file('photo')->storeAs('post_photo', $name);
        }

        $banner->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'photo' => $path1 ?? $banner->photo,
        ]);

        return redirect()->route('banner.index')->with('success', 'success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banner $banner)
    {
        if($banner->photo){
            Storage::delete($banner->photo);
        }
        $banner->delete();

        return redirect()->back();
    }
}
