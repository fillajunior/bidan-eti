<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Pasien;
use App\Models\Personal;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Pasien $pasien)
    {
        $tittle = 'personals';
        return view('/personals/add', compact('tittle', 'pasien'));
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
            'pasien_id' => 'required|integer',
            'tgl_datang' => 'required|date',
            'brt_bdn' => 'required|integer',
            'tnggi_drh' => 'required',
            'tgl_kembali' => 'required|date',
        ],[
            'tgl_datang.required' => '*Harap mengisi tanggal datang',
            'tgl_kembali.required' => '*Harap mengisi tanggal kembali'
        ]);

        $personal = new Personal;
        $personal->pasien_id = $request->input('pasien_id');
        $personal->tgl_datang = $request->input('tgl_datang');
        $personal->berat_badan = $request->input('brt_bdn');
        $personal->tinggi_darah = $request->input('tnggi_drh');
        $personal->tgl_kembali = $request->input('tgl_kembali');

        $personal->save();
        return redirect(route('pasien')) -> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personalData = Personal::where('pasien_id', $id)->get();
        $pasien = Pasien::find($id);

        return view('personals.show', compact('personalData', 'pasien'));
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
        $personal = personal::find($id);
        $personal->delete();

        return redirect('/personals/personal')->with('success', 'Data has been deleted successfully');
    }
}
