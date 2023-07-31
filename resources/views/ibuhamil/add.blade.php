@extends('layouts.main')

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
                    <h3 class="card-title">Data Hasil Pemeriksaan Kesehatan Ibu Hamil</h3>
                    <hr>
                    <form action="{{ route('ibuhamil.create') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{ $ibu->name }}" readonly>
                                    <input type="text" class="form-control" name="ibuid" value="{{ $ibu->id }}"
                                        style="display: none">
                                </div>
                                @error('nama')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                                @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Keluhan</label>
                                    <input type="text" class="form-control" name="keluhan">
                                    <small class="form-hint">*jika tidak ada beri tanda -</small>
                                </div>
                                @error('keluhan')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Tekanan darah</label>
                                    <input type="text" class="form-control" name="tknn_drh">
                                </div>
                                @error('tknn_drh')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Berat badan</label>
                                    <input type="number" class="form-control" name="brt_bdn">
                                </div>
                                @error('brt_bdn')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Umur Kehamilan</label>
                                    <input type="number" name="umr_khmln" class="form-control">
                                </div>
                                @error('umr_khmln')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Letak Janin</label>
                                    <select class="form-select" name="ltk_jnn">
                                        <option value="kep">Kep</option>
                                        <option value="su">Su</option>
                                        <option value="li">Li</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Denyut jantung janin</label>
                                    <select class="form-select" name="dnyt_jnn">
                                        <option value="normal">Normal</option>
                                        <option value="tidak">tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Kaki bengkak</label>
                                    <select class="form-select" name="kk_bngkk">
                                        <option value="iya">Iya</option>
                                        <option value="tidak">tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Tindakan</label>
                                    <input type="text" class="form-control" name="tndkn">
                                    <small class="form-hint">*jika tidak ada beri tanda -</small>
                                </div>
                                @error('tndkn')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Tambahan</label>
                                    <input type="text" name="tmbhn" class="form-control">
                                    <small class="form-hint">*jika tidak ada beri tanda -</small>
                                </div>
                                @error('tmbhn')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <a href="{{ route('ibu') }}" class="btn btn-secondary mr-5">kembali</a>
                        <button type="submit" class="btn btn-primary ms-auto">Tambah data</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
