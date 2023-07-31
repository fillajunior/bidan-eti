@extends('layouts.main')
@section('tittle', $tittle)

@section('container')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <div class="card-tools col-auto ml-5">
                <a href="{{ route('kesibunifas.export') }}" class="btn btn-primary d-sm-inline-block"> cetak data
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
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Tanggal Persalinan</th>
                        <th>Umur Kehamilan</th>
                        <th>Penolong Persalinan</th>
                        <th>Cara Persalinan</th>
                        <th>Keadaan Ibu</th>
                        <th>Keterangan Tambahan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kes_ibu_nifass as $kes_ibu_nifas)
                    <tr>
                        <td>{{ $kes_ibu_nifas->ibu->name }}</td>
                        <td>{{ $kes_ibu_nifas->tanggal_persalinan }}</td>
                        <td>{{  $kes_ibu_nifas->umur_kehamilan }}</td>
                        <td>{{ $kes_ibu_nifas->penolong_persalinan }}</td>
                        <td>{{  $kes_ibu_nifas->cara_persalinan }}</td>
                        <td>{{ $kes_ibu_nifas->keadaan_ibu }}</td>
                        <td>{{ $kes_ibu_nifas->keterangan_tambahan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $kes_ibu_nifass->links() }}
        </div>
        {{-- <div class="card-footer text-end">
            <div class="d-flex">
                <a href="/ibus/ibu" class="btn btn-link mr-5">kembali</a>
            </div>
        </div> --}}
    </div>
</div>
@endsection
