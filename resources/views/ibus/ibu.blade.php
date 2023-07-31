@extends('layouts.main')
@section('tittle', $tittle)

@section('container')
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="row mt-2">
                <div class="col-md-3">
                    <form action="{{ route('ibu.search') }}" method="GET">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukan nama" name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </form>
                </div>
                <div class="card-tools col-auto ms-auto">
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target="#modal-report">
                        Tambah Data Ibu
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" /></svg>
                    </a>
                    <a href="{{ route('ibu.export') }}" class="btn btn-primary d-sm-inline-block"> cetak data
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
            <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah data ibu</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('ibu.create') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        @error('nama')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tmpt_lhr">
                                        </div>
                                        @error('tmpt_lhr')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tnggl_lhr">
                                        </div>
                                        @error('tnggl_lhr')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Agama Ibu</label>
                                            <select class="form-select" name="agm_ibu">
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                            </select>
                                        </div>
                                        @error('agm_ibu')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan</label>
                                            <select class="form-select" name="pnddkn">
                                                <option value="sd">SD</option>
                                                <option value="smp">SMP</option>
                                                <option value="sma">SMA</option>
                                                <option value="perguruan">Perguruan Tinggi</option>
                                            </select>
                                        </div>
                                        @error('pnddkn')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" name="pekerjaan_ibu">
                                            <small class="form-hint">jika tidak ada beri tanda -</small>
                                        </div>
                                        @error('pekerjaan_ibu')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Nama Suami</label>
                                            <input type="text" class="form-control" name="name_suami">
                                            <small class="form-hint">jika tidak ada beri tanda -</small>
                                        </div>
                                        @error('name_suami')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="mb-3">
                                            <label class="form-label">Agama Suami</label>
                                            <select class="form-select" name="agm_suami">
                                                <option value="islam">Islam</option>
                                                <option value="protestan">Protestan</option>
                                                <option value="Katolik">Katolik</option>
                                                <option value="budha">Budha</option>
                                                <option value="-">-</option>
                                            </select>
                                        </div>
                                        @error('agm_suami')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan Suami</label>
                                            <input type="text" class="form-control" name="pkrjaan_suami">
                                            <small class="form-hint">jika tidak ada beri tanda -</small>
                                        </div>
                                        @error('pkrjaan_suami')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div>
                                            <label class="form-label">Alamat</label>
                                            <textarea class="form-control" rows="3" name="alamat"></textarea>
                                        </div>
                                    </div>
                                    @error('alamat')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                                Simpan Data
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
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
                        <th class="w-1"></th>
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
                        <td>
                            <div class="btn-group" aria-label="Button group with nested dropdown">
                                <a href="{{ route('ibu.edit', ['ibu' => $ibu->id]) }}" class="btn btn-primary">edit</a>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-file-plus" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                            <path
                                                d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z">
                                            </path>
                                            <path d="M12 11l0 6"></path>
                                            <path d="M9 14l6 0"></path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('ibuhamil', ['ibu' => $ibu->id]) }}">Pemeriksaan ibu
                                                hamil</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('ibunifas', ['ibu' => $ibu->id]) }}">Ibu Nifas</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-success dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path
                                                d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                            </path>
                                        </svg>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item"
                                                href="{{ route('ibuhamil.show', ['id' => $ibu->id]) }}">Pemeriksaan ibu
                                                hamil</a></li>
                                        <li><a class="dropdown-item"
                                                href="{{ route('ibunifas.show', ['id' => $ibu->id]) }}">Ibu Nifas</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $ibus->links() }}
        </div>
    </div>
</div>
@endsection
