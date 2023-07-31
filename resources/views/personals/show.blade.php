@extends('layouts.main')

@section('container')
<div class="card-header">
    <h3>Pemeriksaan atas nama {{ $pasien->name }}</h3>
</div>
<div class="card-body">
    @if ($personalData)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>tanggal datang</th>
                <th>berat badan</th>
                <th>tekanan darah</th>
                <th>Tanggal kembali</th>
            </tr>
        </thead>
        <hr>
        <tbody>
            @foreach ($personalData as $data)
            <tr>
                <td>{{ $data->tgl_datang }}</td>
                <td>{{ $data->berat_badan }}</td>
                <td>{{ $data->tinggi_darah }}</td>
                <td>{{ $data->tgl_kembali }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('pasien') }}" class="btn btn-link">
        kembali
    </a>
    @else
    <p>Data pemeriksaan atas nama {{ $pasien->nama }} tidak ditemukan</p>
    @endif
</div>
@endsection
