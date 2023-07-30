<?php

namespace App\Http\Controllers;

use App\Models\Kes_ibu_nifas;
use App\Exports\KesibunifasExport;
use Maatwebsite\Excel\facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KesIbuNifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'kes-ibu-nifas';
        $kes_ibu_nifass= Kes_ibu_nifas::all();
        $kes_ibu_nifass = Kes_ibu_nifas::with('ibu')->latest()->paginate(5); 
        return view('laporan/kes-ibu-nifas', [
            'kes_ibu_nifass' => $kes_ibu_nifass,
            'tittle' => $tittle
        ]);
    }

    public function KesibunifasExport()
    {
        return Excel::download(new KesibunifasExport, 'Kesehatan Ibu Nifas.xlsx');
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
