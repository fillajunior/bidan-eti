@extends('layouts/main')
@section('tittle', $tittle)

@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>keluhan sekarang</th>
                        <th>Tekanan Darah</th>
                        <th>Berat badan</th>
                        <th>Umur Kehamilan (minggu)</th>
                        <th>Letak Janin</th>
                        <th>Denyut Jantung</th>
                        <th>Kaki bengkak</th>
                        <th>Tindakan</th>
                        <th>Tambahan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataKesIbuHamil as $dataKesIbuHamil)
                    <tr>
                        <td>{{ $dataKesIbuHamil->tanggal }}</td>
                        <td>{{ $dataKesIbuHamil->keluhan_sekarang }}</td>
                        <td>{{ $dataKesIbuHamil->tekanan_darah }}</td>
                        <td>{{ $dataKesIbuHamil->berat_badan }}</td>
                        <td>{{ $dataKesIbuHamil->umur_kehamilan }}</td>
                        <td>{{ $dataKesIbuHamil->letak_janin }}</td>
                        <td>{{ $dataKesIbuHamil->denyut_jantung }}</td>
                        <td>{{ $dataKesIbuHamil->kaki_bengkak }}</td>
                        <td>{{ $dataKesIbuHamil->tindakan }}</td>
                        <td>{{ $dataKesIbuHamil->tambahan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer text-end">
            <div class="d-flex">
                <a href="/ibus/ibu" class="btn btn-link mr-5">kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
