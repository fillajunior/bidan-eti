@extends('Layouts/Main')

@section('container')
<div class="col-lg-8">
    <div class="card">
        <div class="row row-cards">
            <div class="col-12">
                <div class="card-body">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h3 class="card-title">Data Hasil Pemeriksaan</h3>
                    <hr>
                    <form action="{{ route('personals.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{ $pasien->name }}" readonly>
                                    <input type="text" class="form-control" name="pasien_id" value="{{ $pasien->id }}"
                                        style="display: none">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Datang</label>
                                    <input type="date" class="form-control" name="tgl_datang">
                                    @error('tgl_datang')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Berat badan</label>
                                    <input type="number" class="form-control" name="brt_bdn">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Tinggi darah</label>
                                    <input type="text" class="form-control" name="tnggi_drh">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Tanggal kembali</label>
                                <input type="date" class="form-control" name="tgl_kembali">
                                @error('tgl_kembali')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <a href="{{ route('pasien') }}" class="btn btn-secondary mr-5">kembali</a>
                        <button type="submit" class="btn btn-primary ms-auto">Tambah data</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
