@extends('layouts/main')
@section('tittle', $tittle)

@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="col-auto">
                <a href="{{ route('kesibuhamil.export') }}" class="btn btn-primary d-sm-inline-block"> cetak data
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer" width="24"
                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
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
        <div class="card-body">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Pemeriksaan Tanggal</th>
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
                    @foreach ($kes_ibu_hamils as $kes_ibu_hamil)
                    <tr>
                        <td>{{ $kes_ibu_hamil->ibu->name }}</td>
                        <td>{{ $kes_ibu_hamil->tanggal }}</td>
                        <td>{{  $kes_ibu_hamil->keluhan_sekarang }}</td>
                        <td>{{ $kes_ibu_hamil->tekanan_darah }}</td>
                        <td>{{  $kes_ibu_hamil->berat_badan }}</td>
                        <td>{{ $kes_ibu_hamil->umur_kehamilan }}</td>
                        <td>{{ $kes_ibu_hamil->letak_janin }}</td>
                        <td>{{ $kes_ibu_hamil->denyut_jantung }}</td>
                        <td>{{ $kes_ibu_hamil->kaki_bengkak }}</td>
                        <td>{{ $kes_ibu_hamil->tindakan }}</td>
                        <td>{{ $kes_ibu_hamil->tambahan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $kes_ibu_hamils->links() }}
        </div>
        {{-- <div class="card-footer text-end">
            <div class="d-flex">
                <a href="/ibus/ibu" class="btn btn-link mr-5">kembali</a>
            </div>
        </div> --}}
    </div>
</div>
@endsection
