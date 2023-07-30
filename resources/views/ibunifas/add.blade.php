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
                    <div class="card-header">
                        <div class="row">
                            <div class="col md-3">
                                <h3 class="card-title">Data Pasca Kelahiran Ibu</h3>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('ibunifas.createa') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" value="{{ $ibu->name }}" readonly>
                                    <input type="text" class="form-control" name="ibuid" value="{{ $ibu->id }}"
                                        style="display: none">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Persalinan</label>
                                    <input type="datetime-local" class="form-control" name="tanggal">
                                </div>
                                @error('tanggal')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Umur Kehamilan</label>
                                    <input type="text" class="form-control" name="umr_khmln">
                                </div>
                                @error('umr_khmln')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Penolong Persalinan</label>
                                    <input type="text" class="form-control" name="pnlng_prslnn">
                                </div>
                                @error('pnlng_prslnn')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Cara Persalinan</label>
                                    <input type="text" class="form-control" name="cr_prslnn">
                                </div>
                                @error('cr_prslnn')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Keadaan Ibu</label>
                                    <input type="text" class="form-control" name="keadaan">
                                </div>
                                @error('keadaan')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label class="form-label">Keterangan Tambahan</label>
                                    <textarea class="form-control" rows="3" name="keterangan"></textarea>
                                    <small class="form-hint">*jika tidak ada beri tanda -</small>
                                </div>
                                @error('keterangan')
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
