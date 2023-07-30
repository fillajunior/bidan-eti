<?php

namespace App\Http\Controllers;

use App\Models\kes_ibu_hamil;
use App\Exports\KesibuhamilExport;
use Maatwebsite\Excel\facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesIbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'kes-ibu-hamil';
        $kes_ibu_hamils = kes_ibu_hamil::all();
        $kes_ibu_hamils = kes_ibu_hamil::with('ibu')->latest()->paginate(5); 
        return view('laporan/kes-ibu-hamil', [
            'kes_ibu_hamils' => $kes_ibu_hamils,
            'tittle' => $tittle
        ]);
    }

    public function KesibuhamilExport()
    {
        return Excel::download(new KesibuhamilExport, 'Kesehatan Ibu Hamil.xlsx');
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
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kes_ibu_hamil  $kes_ibu_hamil
     * @return \Illuminate\Http\Response
     */
    public function show(kes_ibu_hamil $kes_ibu_hamil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kes_ibu_hamil  $kes_ibu_hamil
     * @return \Illuminate\Http\Response
     */
    public function edit(kes_ibu_hamil $kes_ibu_hamil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kes_ibu_hamil  $kes_ibu_hamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kes_ibu_hamil $kes_ibu_hamil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kes_ibu_hamil  $kes_ibu_hamil
     * @return \Illuminate\Http\Response
     */
    public function destroy(kes_ibu_hamil $kes_ibu_hamil)
    {
        //
    }
}
