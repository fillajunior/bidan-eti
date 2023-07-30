<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Dompdf\Dompdf;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tittle = 'anak';
        $anaks = Anak::all();
        $anaks = Anak::latest()->paginate(5);
        return view('anaks/anak', [
            'anaks' => $anaks,
            'tittle' => $tittle
        ]);
    }

    public function cetakskl(Anak $anak)
    {
        return view('anaks.cetakskl', ['anak' => $anak]);
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
            'tmpt_lhr' => 'required',
            'tgl_lhr' => 'required',
            'nm_ibu' => 'required',
            'nm_ayah' => 'required',
            'alamat' => 'required',
        ], [
            'tmpt_lhr.required' => '*Harap diisi',
            'tgl_lhr.required' => '*Harap diisi',
            'nm_ibu.required' => '*Harap diisi',
            'nm_ayah.required' => '*Harap diisi',
            'alamat.required' => '*Harap diisi',
        ]);

        $anak = new anak;
        $anak->nama_anak = $request->input('nama_anak');
        $anak->jenis_kelamin = $request->input('jns_klmn');
        $anak->tempat_lahir = $request->input('tmpt_lhr');
        $anak->tanggal_lahir = $request->input('tgl_lhr');
        $anak->nama_ibu = $request->input('nm_ibu');
        $anak->nama_ayah = $request->input('nm_ayah');
        $anak->alamat = $request->input('alamat');

        $anak->save();
        return redirect('anaks') -> with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function show(Anak $anak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function edit(Anak $anak)
    {
        return view('anaks.edit', ['anak' => $anak]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anak $anak)
    {
        $anak->nama_anak = $request->input('nama_anak');
        $anak->nama_ibu = $request->input('nama_ibu');
        $anak->tgl_lahir = $request->input('tgl_lhr');
        $anak->brt_bayi = $request->input('brt_by');
        $anak->tnggi_bayi = $request->input('tnggi_by');
        $anak->keterangan = $request->input('keterangan');

        $anak->save();
        return redirect('anaks/anak') -> with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anak  $anak
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = anak::find($id);
        $anak->delete();

        return redirect('/anaks/anak')->with('success', 'Data has been deleted successfully');
    }
}
