<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\ActiveClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActiveClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = ActiveClient::all()->sortDesc();
        return view('admin.active.index')->with('active_clients', $about);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.active.create')->with([
            'active_clients' => ActiveClient::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        ActiveClient::create([
            'active_client' => $request->active_client,
            'experienced' => $request->experienced,
            'years_services' => $request->years_services,
        ]);

        return redirect()->route('active_client.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ActiveClient $active_client)
    {
        return view('admin.active.show')->with([
            'active_clients' => $active_client,
        ]);
    }

    public function edit(ActiveClient $active_client)
    {
        return view('admin.active.edit')->with(['activeClient' => $active_client]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ActiveClient $active_client)
    {

        $active_client->update([
            'active_client' => $request->active_client,
            'experienced' => $request->experienced,
            'years_services' => $request->years_services,
        ]);

        return redirect()->route('active_client.index', ['active_clients' => $active_client->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActiveClient $active_client)
    {
        $active_client->delete();
        return redirect()->route('active_client.index');
    }
}
