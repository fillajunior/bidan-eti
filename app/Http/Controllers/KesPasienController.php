<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Exports\KespasienExport;
use Maatwebsite\Excel\facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'kesehatan-pasien';
        $kes_pasien = Personal::all();
        $kes_pasien = Personal::with('pasien')->latest()->paginate(5);
        return view('laporan/kes-pasien', [
            'kes_pasien' => $kes_pasien,
            'tittle' => $tittle
        ]);
    }

    public function KespasienExport()
    {
        return Excel::download(new KespasienExport, 'Pemeriksaan Pasien.xlsx');
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
        //
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
