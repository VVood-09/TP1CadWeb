<?php

namespace App\Http\Controllers;

use App\Models\CadWebTp1Etudiant;
use App\Models\CadWebTp1Ville;
use Illuminate\Http\Request;

class CadWebTp1EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = CadWebTp1Etudiant::select()->paginate(10);
        return view('etudiant.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = CadWebTp1Ville::all();
        return view('etudiant.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = CadWebTp1Etudiant::create([
            'nom' => $request->nom,
            'adresse'  => $request->adresse,
            'telephone'  => $request->telephone,
            'courriel'  => $request->courriel,
            'date_de_naissance'  => $request->date_de_naissance,
            'ville_id'  => $request->ville_id
        ]);

        return redirect(route('etudiant.show', $etudiant->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CadWebTp1Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(CadWebTp1Etudiant $etudiant)
    {
        return view('etudiant.show', ['etudiant' => $etudiant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CadWebTp1Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(CadWebTp1Etudiant $etudiant)
    {
        $villes = CadWebTp1Ville::all();
        return view('etudiant.edit', ['etudiant' => $etudiant, 'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CadWebTp1Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CadWebTp1Etudiant $etudiant)
    {
        $etudiant->update([
            'nom' => $request->nom,
            'courriel' => $request->courriel,
            'adresse' => $request->adresse,
            'date_de_naissance' => $request->date_de_naissance,
            'ville_id' => $request->ville_id,
            'telephone' => $request->telephone,
        ]);

        return redirect(route('etudiant.show', $etudiant->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CadWebTp1Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(CadWebTp1Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect(route('etudiant.index'));
    }
}
