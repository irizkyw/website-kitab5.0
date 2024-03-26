<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ayat;

class AyatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ayats = Ayat::all();
        return view('Ayats.ayat', compact('ayats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "book_id" => 'required',
            "ayat" => "required|max:255",
        ]);
        Ayat::create($request>all());
        return redirect()->route('Ayats.ayat')
            ->with('success','Ayat Created Successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ayats = Ayat::find($id);
        return view('ayats.show', compact('ayats'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "book_id" => 'required',
            "ayat" => "required|max:255",
        ]);
        $ayats = Ayat::find($id);
        $ayats->update($request->all());
        return redirect()->route('Ayats.ayats')
            ->with('Success', 'Ayat Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ayats = Ayat::find($id);
        $ayats->delete();
        return redirect()->route('Ayats.ayats')
            ->with('Success', 'Ayat Deleted Successfully');
    }

    public function create()
    {
        return view("ayats.create");
    }

    public function edit(string $id)
    {
        $ayats = Ayat::find($id);
        return view("ayats.edit",  compact('ayats'));
    }
}
