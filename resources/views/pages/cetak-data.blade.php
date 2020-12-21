<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('images/logo/tangsel.png') }}" type="image/x-icon">
    <title>DISDUKCAPIL TANGERANG SELATAN</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        th, td {
            padding: 10px;
        }
        .fs-20{
            font-size: 20px
        }
        .fs-15{
            font-size: 15px
        }
        .fs-25{
            font-size: 25px
        }
        .fs-30{
            font-size: 45px
        }
    </style>
</head>

<body>
    <div class="mt-5 text-center">
        <img class="mb-3" src="{{ asset('images/logo/tangsel.png') }}" width="100" alt="">
        <p class="fs-25 font-weight-bold">Dinas Kependudukan dan Catatan Sipil</p>
        <p class="fs-25 font-weight-bold mt-n4">Kota Tangerang Selatan</p>
        <p class="font-weight-bold fs-20">ID REGISTRASI</p>
        <p class="mt-n3 font-weight-bold fs-20">{{ $result->id_registrasi }}</p>
        <p class=" mt-n3 font-weight-bold fs-30">{{ substr($result->id_registrasi,9) }}</p>
        <p class="font-weight-bold fs-20">Nama : <span class="text-uppercase">{{ $result->nama }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">No Plat : <span class="text-uppercase">{{ $result->no_plat }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">No Telp Driver : <span class="text-uppercase">{{ $result->no_telp }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">Jenis Jasa : <span class="text-uppercase">{{ $result->jenis_paket == 1 ? 'GRAB' : 'GOJEK' }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">Tujuan : <span class="text-uppercase">{{ $result->tujuan == 1 ? 'Mengambil' : 'Mengirim' }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">Petugas Disdukcapil : <span class="text-uppercase">{{ $result->penerima }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">Pemesan : <span class="text-uppercase">{{ $result->pemesan }}</span></p>
        <p class="font-weight-bold fs-20 mt-n3">No Telp Pemesan : <span class="text-uppercase">{{ $result->no_telp_pemesan }}</span></p>
        <p class="fs-20 font-weight-bold">Tanggal :</p>
        <p class="fs-20 font-weight-bold mt-n3">{{ Carbon\Carbon::parse($result->tanggal)->isoFormat('D-MMM-Y') }}</p>
        <p class="fs-20 font-weight-bold">Jam</p>
        <p class="fs-20 font-weight-bold mt-n3">{{ $result->jam }}</p>
        <p class="fs-15 font-weight-bold">Alamat</p>
        <p class="fs-15 mt-n3">Jl. Raya Serpong No.KM. 16, Cilenggang, Kec. Serpong Utara, </p>
        <p class="fs-15 mt-n3">Kota Tangerang Selatan, Banten 15310</p>
        <p class="fs-15 mt-n3">(021) 5370296</p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
