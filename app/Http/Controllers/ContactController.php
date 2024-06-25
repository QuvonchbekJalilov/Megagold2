<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = Contact::all()->sortDesc();
        return view('admin.contact.index')->with('contacts', $contact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create')->with([
            'contacts' => Contact::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Contact::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('contact.index');
    }

    /**
     * Display the specified resource.
     */

    public function edit(Contact $contact)
    {
        return view('admin.contact.edit')->with(['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {

        $contact->update([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('contact.index', ['contacts' => $contact->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
