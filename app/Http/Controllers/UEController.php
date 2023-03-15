<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUERequest;
use App\Http\Requests\UpdateUERequest;
use App\Models\Programme;
use App\Models\UE;

class UEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ues = UE::all();
        return view('ue_list', ['ues' => $ues]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $programs = Programme::all();

        return view('add_ue', ['programs' => $programs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUERequest $request)
    {
        $ue = new UE();
        $ue->nom = $request->nom;
        $ue->nombreECU = $request->nombre_ecu;
        $ue->masseHoraireTotal = $request->nombre_total;
        $ue->masseHoraireEffectué = $request->nombre_effectue;
        $ue->programme_id = $request->programme_id;
        
        $ue->save();

        return redirect(route('UE.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(UE $uE)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ue = UE::findOrFail($id);

        return view('edit_ue', ['ue' => $ue]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUERequest $request, $id)
    {
        $ue = UE::findOrFail($id);
        $ue->masseHoraireEffectué = $request->nombre_effectue;
        
        $ue->save();

        return redirect(route('UE.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ue = UE::findOrFail($id);

        $ue->delete();

        return redirect(route('UE.index'));
    }
}
