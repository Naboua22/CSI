<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnneeAcademiqueRequest;
use App\Http\Requests\UpdateAnneeAcademiqueRequest;
use App\Models\AnneeAcademique;
use Illuminate\Http\Request;

class AnneeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $annees = AnneeAcademique::all();
        return view('list', ['annees' => $annees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_annee');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnneeAcademiqueRequest $request)
    {
        $annee = new AnneeAcademique();
        $annee->dateDebut = $request->date_debut;
        $annee->dateFin = $request->date_fin;
        
        $annee->save();

        return redirect(route('annee.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(AnneeAcademique $anneeAcademique)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $annee = AnneeAcademique::findOrFail($id);
        
        return view('edit_annee', ['annee' => $annee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnneeAcademiqueRequest $request, $id)
    {
        $annee = AnneeAcademique::findOrFail($id);
        $annee->dateDebut = $request->date_debut;
        $annee->dateFin = $request->date_fin;
        
        $annee->save();

        return redirect(route('annee.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $annee = AnneeAcademique::findOrFail($id);

        $annee->delete();

        return redirect(route('annee.index'));
    }
}
