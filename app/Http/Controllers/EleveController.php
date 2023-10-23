<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eleves;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleves::paginate(10); // Paginer les élèves par page (par exemple, 10 élèves par page)
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajoutEleve');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required',
            'numero_etudiant' => 'required|unique:eleves',
            'email' => 'required|email|unique:eleves',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('eleve_images', 'public');

        Eleves::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'numero_etudiant' => $request->numero_etudiant,
            'email' => $request->email,
            'image' => $imagePath,
        ]);

        return redirect('/')->with('success', 'Élève ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eleve = Eleves::findOrFail($id);
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Élève supprimé avec succès.');
    }
}
