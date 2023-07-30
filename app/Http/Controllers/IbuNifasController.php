<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ibu;
use App\Models\Kes_ibu_nifas;

class IbuNifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ibu $ibu)
    {
        $tittle = 'personals';
        return view('/ibunifas/add', compact('tittle', 'ibu'));
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
            'umr_khmln' => 'required',
            'pnlng_prslnn' => 'required',
            'cr_prslnn' => 'required',
            'keadaan' => 'required',
            'keterangan' => 'required',
        ], [
            'tanggal.required' => '*Harap diisi',
            'umr_khmln.required' => '*Harap diisi',
            'pnlng_prslnn.required' => '*Harap diisi',
            'cr_prslnn.required' => '*Harap diisi',
            'keadaan.required' => '*Harap diisi',
            'keterangan.required' => '*Harap diisi',
        ]);

        $kes_ibu_nifas = new kes_ibu_nifas;
        $kes_ibu_nifas->ibu_id = $request->input('ibuid');
        $kes_ibu_nifas->tanggal_persalinan = $request->input('tanggal');
        $kes_ibu_nifas->umur_kehamilan = $request->input('umr_khmln');
        $kes_ibu_nifas->penolong_persalinan = $request->input('pnlng_prslnn');
        $kes_ibu_nifas->cara_persalinan = $request->input('cr_prslnn');
        $kes_ibu_nifas->keadaan_ibu = $request->input('keadaan');
        $kes_ibu_nifas->keterangan_tambahan = $request->input('keterangan');

        $kes_ibu_nifas->save();
        return redirect(route('ibu'))->with('success', 'Data Kelahiran ibu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalData = Kes_ibu_nifas::where('ibu_id', $id)->get();
        $ibu = Ibu::find($id);

        return view('ibunifas.show', compact('personalData', 'ibu'));
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
