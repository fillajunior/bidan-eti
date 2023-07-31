@extends('layouts.main')

@section('container')
<div class="col-lg-8">
    <div class="card">
        <form method="POST" action="/anaks/{{ $anak->id }}">
            @csrf
            @method('PUT')
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card-body">
                        <h3 class="card-title">Edit data</h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama anak</label>
                                    <input type="text" class="form-control" value="{{ $anak->nama_anak }}" name="nama_anak">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Nama ibu</label>
                                    <input type="text" class="form-control" value="{{ $anak->nama_ibu }}" name="nama_ibu">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Tgl_lahir</label>
                                    <input type="date" class="form-control" value="{{ $anak->tgl_lahir }}" name="tgl_lhr">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">berat bayi</label>
                                    <input type="text" class="form-control" value="{{ $anak->brt_bayi }}" name="brt_by">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label class="form-label">tinggi bayi</label>
                                    <input type="text" class="form-control" value="{{ $anak->tnggi_bayi }}" name="tnggi_by">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">Keterangan</label>
                                <textarea class="form-control" name="keterangan" rows="2" value="{{ $anak->keterangan }}"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <div class="d-flex">
                            <a href="/anaks/anak" class="btn btn-secondary mr-5" >kembali</a>
                            <button type="submit" class="btn btn-primary ms-auto">Update data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
{{--onclick="updateUser({{ $pasien->id }})"
    <script>
    function updateUser(pasienId) {
        var name = document.querySelector('input[name="name"]').value;
        var nik = document.querySelector('input[name="nik"]').value;
        var no_telp= document.querySelector('input[name="notelp"]').value;
        var tgl_pemeriksaan = document.querySelector('input[name="tgl_pemeriksaan"]').value;
        var keterangan = document.querySelector('input[name="keterangan"]').value;


        fetch('/pasiens/' + pasienId, {
            method: 'PATCH',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                name: name,
                nik: nik,
                no_telp: no_telp,
                tgl_pemeriksaan: tgl_pemeriksaan,
                keterangan: keterangan,
            })
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script> --}}
@endsection
