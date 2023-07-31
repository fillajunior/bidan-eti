@extends('layouts.main')

@section('container')
<div class="card-header">
    <div class="row">
        <div class="col md-3">
            <h3>Pemeriksaan atas nama {{ $ibu->name }}</h3>
        </div>
        <div class="col-auto ms-auto">
            <a href="#" class="btn btn-primary d-sm-inline-block"> cetak SKL
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                    </path>
                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                    <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="card-body">
    @if ($personalData)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal Persalinan</th>
                <th>Umur Kehamilan</th>
                <th>Penolong Persalinan</th>
                <th>Cara Persalinan</th>
                <th>Keadaan Ibu</th>
                <th>Keterangan Tambahan</th>
            </tr>
        </thead>
        <hr>
        <tbody>
            @foreach ($personalData as $data)
            <tr>
                <td>{{ $data->tanggal_persalinan }}</td>
                <td>{{  $data->umur_kehamilan }}</td>
                <td>{{ $data->penolong_persalinan }}</td>
                <td>{{  $data->cara_persalinan }}</td>
                <td>{{ $data->keadaan_ibu }}</td>
                <td>{{ $data->keterangan_tambahan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('ibu') }}" class="btn btn-link">
        kembali
    </a>
    @else
    <p>Data pemeriksaan atas nama {{ $ibu->nama }} tidak ditemukan</p>
    @endif
</div>
@endsection
