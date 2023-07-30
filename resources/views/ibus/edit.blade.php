@extends('Layouts/Main')

@section('container')
<div class="col-lg-8">
    <div class="card">
        <form method="POST" action="{{ route('ibu.update', ['ibu' => $ibu->id]) }}">
            @csrf
            @method('PUT')
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card-body">
                        <h3 class="card-title">Edit data</h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control" name="name" value="{{ $ibu->name }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tmpt_lhr" value="{{ $ibu->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tnggl_lhr" value="{{ $ibu->tanggal_lahir }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Agama Ibu</label>
                                    <select class="form-select" name="agm_ibu" value="{{ $ibu->agama_ibu }}">
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Pendidikan</label>
                                    <select class="form-select" name="pnddkn" value="{{ $ibu->pendidikan }}">
                                        <option value="sd">SD</option>
                                        <option value="smp">SMP</option>
                                        <option value="sma">SMA</option>
                                        <option value="perguruan">Perguruan tinggi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Pekerjaan Ibu</label>
                                    <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ $ibu->pekerjaan_ibu }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama Suami</label>
                                    <input type="text" class="form-control" name="name_suami" value="{{ $ibu->name_suami }}">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Agama Suami</label>
                                    <select class="form-select" name="agm_suami" value="{{ $ibu->agama_suami }}">
                                        <option value="islam">Islam</option>
                                        <option value="protestan">Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="budha">Budha</option>
                                        <option value="-">-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Pekerjaan Suami</label>
                                    <input type="text" class="form-control" name="pkrjaan_suami" value="{{ $ibu->pekerjaan_suami }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat">{{ $ibu->alamat }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="{{ route('ibu') }}" class="btn btn-secondary mr-5" >kembali</a>
                            <button type="submit" class="btn btn-primary ms-auto">Update data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
