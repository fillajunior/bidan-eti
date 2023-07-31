@extends('layouts.main')

@section('container')
<div class="card-header">
    <h3>Pemeriksaan atas nama {{ $ibu->name }}</h3>
</div>
<div class="card-body">
    @if ($personalData)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
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
        <hr>
        <tbody>
            @foreach ($personalData as $data)
            <tr>
                <td>{{ $data->ibu->name }}</td>
                <td>{{ $data->tanggal }}</td>
                <td>{{  $data->keluhan_sekarang }}</td>
                <td>{{ $data->tekanan_darah }}</td>
                <td>{{  $data->berat_badan }}</td>
                <td>{{ $data->umur_kehamilan }}</td>
                <td>{{ $data->letak_janin }}</td>
                <td>{{ $data->denyut_jantung }}</td>
                <td>{{ $data->kaki_bengkak }}</td>
                <td>{{ $data->tindakan }}</td>
                <td>{{ $data->tambahan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('ibu') }}" class="btn btn-link">
        kembali
    </a>
    @else
    <p>Data pemeriksaan atas nama {{ $pasien->nama }} tidak ditemukan</p>
    @endif
</div>
@endsection
