<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use App\Models\Kes_ibu_hamil;
use App\Exports\IbuExport;
use Maatwebsite\Excel\facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IbuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'ibu';
        $ibus = Ibu::all();
        $ibus = Ibu::latest()->paginate(5);
        return view('ibus/ibu', ['ibus' => $ibus], ['tittle' => $tittle]);
    }

    public function ibuExport()
    {
        return Excel::download(new ibuExport, 'ibu.xlsx');
    }

    public function getDataKesIbuHamil($ibu_id)
    {
        $dataKesIbuHamil = Kes_ibu_hamil::where('ibu_id', $ibu_id)->get();
        return view('nama-view', ['dataKesIbuHamil' => $dataKesIbuHamil]);
    }

    public function search(Request $request)
    {
        $tittle = 'ibu';
        $searchTerm = $request->input('search');

        $ibus = Ibu::where('name', 'LIKE', "%{$searchTerm}%")->latest()->paginate(6);

        return view('ibus/ibu', ['ibus' => $ibus], ['tittle' => $tittle]);
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
            'name'         => 'required|min:3',
            'tmpt_lhr' => 'required',
            'tnggl_lhr' => 'required',
            'agm_ibu' => 'required',
            'pnddkn' => 'required',
            'pekerjaan_ibu' => 'required',
            'name_suami' => 'required',
            'agm_suami' => 'required',
            'pkrjaan_suami' => 'required',
            'alamat' => 'required',
        ], [
            'name.required' => '*Harap diisi',
            'tnggl_lhr.required' => '*Harap diisi',
            'tmpt_lhr.required' => '*Harap diisi',
            'agm_ibu.required' => '*Harap diisi',
            'pnddkn.required' => '*Harap diisi',
            'pekerjaan_ibu.required' => '*Harap diisi',
            'name_suami.required' => '*Harap diisi',
            'agm_suami.required' => '*Harap diisi',
            'pkrjaan_suami.required' => '*Harap diisi',
            'alamat.required' => '*Harap diisi'
        ]);

        $ibu = new Ibu;
        $ibu->name = $request->input('name');
        $ibu->tempat_lahir = $request->input('tmpt_lhr');
        $ibu->tanggal_lahir = $request->input('tnggl_lhr');
        $ibu->agama_ibu = $request->input('agm_ibu');
        $ibu->pendidikan = $request->input('pnddkn');
        $ibu->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $ibu->name_suami = $request->input('name_suami');
        $ibu->agama_suami = $request->input('agm_suami');
        $ibu->pekerjaan_suami = $request->input('pkrjaan_suami');
        $ibu->alamat = $request->input('alamat');

        $ibu->save();
        return redirect('ibu') -> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function show(Ibu $ibu)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function edit(Ibu $ibu)
    {
        return view('ibus.edit', ['ibu' => $ibu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ibu $ibu)
    {
        $ibu->name = $request->input('name');
        $ibu->tempat_lahir = $request->input('tmpt_lhr');
        $ibu->tanggal_lahir = $request->input('tnggl_lhr');
        $ibu->agama_ibu = $request->input('agm_ibu');
        $ibu->pendidikan = $request->input('pnddkn');
        $ibu->pekerjaan_ibu = $request->input('pekerjaan_ibu');
        $ibu->name_suami = $request->input('name_suami');
        $ibu->agama_suami = $request->input('agm_suami');
        $ibu->pekerjaan_suami = $request->input('pkrjaan_suami');
        $ibu->alamat = $request->input('alamat');

        $ibu->save();
        return redirect('ibu') -> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibu  $ibu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ibu = ibu::find($id);
        $ibu->delete();

        return redirect('/ibus/ibu')->with('success', 'Data has been deleted successfully');
    }
}
