<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Exports\PasienExport;
use Maatwebsite\Excel\facades\Excel;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'pasien';
        $pasiens= Pasien::all();
        $pasiens = Pasien::latest()->paginate(5); 
        return view('pasiens/pasien', [
            'pasiens' => $pasiens,
            'tittle' => $tittle
        ]);
    }

    public function pasienExport(){
        return Excel::download(new PasienExport, 'pasien.xlsx');
    }

    public function search(Request $request)
    {
        $tittle = 'pasien';
        $searchTerm = $request->input('search');

        $pasiens = Pasien::where('name', 'LIKE', "%{$searchTerm}%")->latest()->paginate(6);

        return view('pasiens/pasien', [
            'pasiens' => $pasiens,
            'tittle' => $tittle
        ]);
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
            'umur' => 'required',
            'tgl_awal' =>'required',
        ],[
            'name.required' => '*Harap diisi',
            'umur.required' => '*Harap diisi',
            'tgl_awal.required' => '*Harap diisi'
        ]);

            $pasien = new Pasien;
            $pasien->name = $request->input('name');
            $pasien->umur = $request->input('umur');
            $pasien->nama_suami = $request->input('nm_suami');
            $pasien->tgl_awal = $request->input('tgl_awal');
            $pasien->metode = $request->input('metode');
    
            $pasien->save();
            return redirect('pasien') -> with('success', 'Data berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasiens.edit', ['pasien' => $pasien]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $pasien->name = $request->input('name');
        $pasien->umur = $request->input('umur');
        $pasien->nama_suami = $request->input('nm_suami');
        $pasien->tgl_awal = $request->input('tgl_awal');
        $pasien->metode = $request->input('metode');

        $pasien->save();

        return redirect('pasien') -> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();

        return redirect('/pasiens/pasien')->with('success', 'Data has been deleted successfully');
    }
}
