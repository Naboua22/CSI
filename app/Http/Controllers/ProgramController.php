<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProgrammeRequest;
use App\Http\Requests\UpdateProgrammeRequest;
use App\Models\AnneeAcademique;
use App\Models\Programme;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = Programme::all();
        return view('programme_list', ['programs' => $programs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $annees = AnneeAcademique::all();

        return view('add_program', ['annees' => $annees]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProgrammeRequest $request)
    {
        $program = new AnneeAcademique();
        $program->nom = $request->nom;
        $program->filiere = $request->filiere;
        $program->nombre_ue = $request->nombre_ue;
        $program->annee_id = $request->annee_id;
        
        $program->save();

        return redirect(route('program.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program = Programme::findOrFail($id);
        $annee = AnneeAcademique::findOrFail($id);

        return view('edit_program', ['program' => $program, 'annee' => $annee]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProgrammeRequest $request, $id)
    {
        $program = Programme::findOrFail($id);
        $program->nom = $request->nom;
        $program->filiere = $request->filiere;
        $program->nombre_ue = $request->nombre_ue;
        $program->annee_id = $request->annee_id;
        
        $program->save();

        return redirect(route('program.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $program = Programme::findOrFail($id);

        $program->delete();

        return redirect(route('program.index'));
    }
}
