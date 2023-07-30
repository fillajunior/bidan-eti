<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibu;
use App\Models\Kes_ibu_hamil;

class IbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ibu $ibu)
    {
        $tittle = 'personals';
        return view('/ibuhamil/add', compact('tittle', 'ibu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required',
            'keluhan' => 'required',
            'tknn_drh' => 'required',
            'brt_bdn' => 'required',
            'umr_khmln' => 'required',
            'tndkn' => 'required',
            'tmbhn' => 'required',
        ], [
            'name.required' => '*Harap diisi',
            'tanggal.required' => '*Harap diisi',
            'keluhan.required' => '*Harap diisi',
            'tknn_drh.required' => '*Harap diisi',
            'brt_bdn.required' => '*Harap diisi',
            'umr_khmln.required' => '*Harap diisi',
            'tndkn.required' => '*Harap diisi',
            'tmbhn.required' => '*Harap diisi',
        ]);
        
        $kes_ibu_hamil = new kes_ibu_hamil;
        $kes_ibu_hamil->ibu_id = $request->input('ibuid');
        $kes_ibu_hamil->tanggal = $request->input('tanggal');
        $kes_ibu_hamil->keluhan_sekarang = $request->input('keluhan');
        $kes_ibu_hamil->tekanan_darah = $request->input('tknn_drh');
        $kes_ibu_hamil->berat_badan = $request->input('brt_bdn');
        $kes_ibu_hamil->umur_kehamilan = $request->input('umr_khmln');
        $kes_ibu_hamil->letak_janin = $request->input('ltk_jnn');
        $kes_ibu_hamil->denyut_jantung = $request->input('dnyt_jnn');
        $kes_ibu_hamil->kaki_bengkak = $request->input('kk_bngkk');
        $kes_ibu_hamil->tindakan = $request->input('tndkn');
        $kes_ibu_hamil->tambahan = $request->input('tmbhn');

        $kes_ibu_hamil->save();
        return redirect(route('ibu'))->with('success', 'Data pemeriksaan kesehatan ibu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalData = Kes_ibu_hamil::where('ibu_id', $id)->get();
        $ibu = Ibu::find($id);

        return view('ibuhamil.show', compact('personalData', 'ibu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
