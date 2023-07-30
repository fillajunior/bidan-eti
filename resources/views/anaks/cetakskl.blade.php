<!DOCTYPE html>
<html>

<head>
    <title>Surat Keterangan Kelahiran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    @if ($anak)
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3>BIDAN ETI WINARSIH, Str Keb</h3>
                    <p>SIPB: 440/SIPB/....../DPMPTSP/2020</p>
                    <p>Alamat: Lingkungan Kayu Manis Rt01/ Rw 03 Cirimekar,Cibinong, Bogor</p>
                    <hr style="border-top: 2px solid;">
                </div>
                <h2 class="text-center">SURAT KETERANGAN KELAHIRAN</h2><br>
                <p>Yang bertanda tangan dibawah ini. Bidan Eti Winarsih menerangkan bahwa, telah lahir seorang anak </p><br>
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>Nama Lengkap :</strong>{{ $anak->nama_anak }}</p>
                        <p><strong>Jenis Kelamin :</strong>{{ $anak->jenis_kelamin }}</p>
                        <p><strong>Tempat Lahir :</strong>{{ $anak->tempat_lahir }}</p>
                        <p><strong>Tanggal Lahir :</strong>{{ $anak->tanggal_lahir }}</p>
                        <p><strong>Anak dari</strong></p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <p><strong>Nama Ayah :</strong>{{ $anak->nama_ibu }}</p>
                        <p><strong>Nama Ibu :</strong>{{ $anak->nama_ayah }}</p>
                        <p><strong>Alamat :</strong> {{ $anak->alamat }}</p>
                    </div>
                </div>
                <br>
                <p>Demikian Surat Keterangan Kelahiran ini diberikan untuk dapat digunakan sebagaimana mestinya.</p>
                <br>
                <div class="row">
                    <div class="col-md-8 offset-md-6 text-right">
                        <p class="text-center">Cibinong,..........................................................</p>
                        <p class="text-center">Bidan</p>
                        <br><br><br><br>
                        <hr class="col-md-3" style="border: solid">
                        <p class="text-center"><b>Bidan Eti Winarsih, Str Keb</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    <script type="text/javascript">
        window.print();

    </script>
</body>

</html>
