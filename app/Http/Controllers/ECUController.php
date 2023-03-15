<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreECURequest;
use App\Http\Requests\UpdateECURequest;
use App\Models\ECU;
use App\Models\UE;

class ECUController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ecus = ECU::all();
        return view('ecu_list', ['ecus' => $ecus]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ues = UE::all();

        return view('add_ecu', ['ues' => $ues]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreECURequest $request)
    {
        $ecu = new ECU();
        $ecu->nom = $request->nom;
        $ecu->nom_enseignant = $request->nom_enseignant;
        $ecu->masse_horaire_total = $request->nombre_total;
        $ecu->masse_horaire_ecoulee = $request->nombre_effectue;
        $ecu->ue_id = $request->ue_id;
        
        $ecu->save();

        return redirect(route('ECU.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ECU $eCU)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ecu = ECU::findOrFail($id);

        return view('edit_ecu', ['ecu' => $ecu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateECURequest $request, $id)
    {
        $ecu = ECU::findOrFail($id);
        $ecu->masseHoraireEffectué = $request->nombre_effectue;
        
        $ecu->save();

        return redirect(route('ECU.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ecu = ECU::findOrFail($id);

        $ecu->delete();

        return redirect(route('ECU.index'));
    }
}
