@extends('layouts.main')
@section('tittle', $tittle)

@section('container')
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg> </span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">
                            Jumlah Pasien :
                        </div>
                        <div class="text-muted">
                            {{ $totalpasiens }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card card-sm">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                            </svg> </span>
                    </div>
                    <div class="col">
                        <div class="font-weight-medium">
                            Jumlah Ibu yang Melahirkan :
                        </div>
                        <div class="text-muted">
                            {{ $totalibu }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-12 mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pasien</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Nama suami</th>
                        <th>Tanggal awal datang</th>
                        <th>Metode</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasiens as $pasien)
                    <tr>
                        <td>{{ $pasien->name }}</td>
                        <td>{{ $pasien->umur }}</td>
                        <td>{{ $pasien->nama_suami }}</td>
                        <td>{{ $pasien->tgl_awal }}</td>
                        <td>{{ $pasien->metode }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $pasiens->links() }}
        </div>
    </div>
</div>
<div class="col-12 mt-4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Ibu</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Ibu</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>Agama Ibu</th>
                        <th>pendidikan</th>
                        <th>pekerjaan ibu</th>
                        <th>Nama Suami</th>
                        <th>Agama Suami</th>
                        <th>Pekerjaan Suami</th>
                        <th>Alamat rumah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ibus as $ibu)
                    <tr>
                        <td>{{ $ibu->name }}</td>
                        <td>{{ $ibu->tempat_lahir }}</td>
                        <td>{{ $ibu->tanggal_lahir }}</td>
                        <td>{{ $ibu->agama_ibu }}</td>
                        <td>{{ $ibu->pendidikan }}</td>
                        <td>{{ $ibu->pekerjaan_ibu }}</td>
                        <td>{{ $ibu->name_suami }}</td>
                        <td>{{ $ibu->agama_suami }}</td>
                        <td>{{ $ibu->pekerjaan_suami }}</td>
                        <td>{{ $ibu->alamat }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ibus->links() }}
        </div>
    </div>
</div>

@endsection
