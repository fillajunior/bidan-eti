@extends('layouts.main')

@section('container')
<div class="col-lg-8">
    <div class="card">
        <form method="POST" action="{{ route('pasien.update', ['pasien' => $pasien->id]) }}">
            @csrf
            @method('PUT')
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card-body">
                        <h3 class="card-title">Edit data</h3>
                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ $pasien->name }}" name="name" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">umur</label>
                                    <input type="number" class="form-control" value="{{ $pasien->umur }}" name="umur">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama suami</label>
                                    <input type="text" class="form-control" value="{{ $pasien->nama_suami }}" name="nm_suami">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Tgl_awal</label>
                                <input type="date" class="form-control" value="{{ $pasien->tgl_awal }}" name="tgl_awal">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">Metode</label>
                                <select class="form-select" name="metode" value="{{ $pasien->metode }}">
                                    <option value="suntik">Suntik</option>
                                    <option value="pil">Pil</option>
                                    <option value="IUD">IUD</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="{{ route('pasien') }}" class="btn btn-secondary mr-5" >kembali</a>
                            <button type="submit" class="btn btn-primary ms-auto">Update data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
