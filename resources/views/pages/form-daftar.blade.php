@extends('layouts.app')
@section('content')
<div class="container-contact100">
    <div class="wrap-contact100">
        <!-- Alert Errors -->
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show text-center bdr-5 col-md-12 container" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- Alert Errors -->
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Whoops Error!</strong>&nbsp;
            <span>You have {{ $errors->count() }} error</span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form class="needs-validation contact100-form" action="{{ route('store') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <span class="contact100-form-title">
                SELAMAT DATANG
            </span>
            <div class="wrap-input100 validate-input">
                <span class="label-input100 font-weight-bold">Nama</span>
                <input type="text" class="input100 form-control" style="border: none" name="nama" id="nama" placeholder="Masukan Nama" required>
            </div>
            <div class="wrap-input100 input100-select">
                <span class="label-input100 font-weight-bold">Jenis Paket</span>
                <div>
                    <select class="selection-2 form-control" name="jenis_paket" id="jenis_paket" required>
                        <option class="fs-10" value="0">Pilih</option>
                        <option value="grab">Grab</option>
                        <option class="gojek">Gojek</option></option>
                    </select>
                </div>
            </div>
            <div class="wrap-input100 validate-input">
                <span class="label-input100 font-weight-bold">No Plat</span>
                <input type="text" class="input100 form-control" style="border: none" name="no_plat" id="no_plat" placeholder="Masukan No Plat" required>
            </div>
            <div class="wrap-input100 validate-input">
                <span class="label-input100 font-weight-bold mb-3">Foto</span>
                <div class="mt-2">
                    <input type="file" name="foto" id="file" class="input-file" onchange="tampilkanPreview(this,'preview')" required/>
                    <label for="file" class="form-control input single-input-primary bdr-5 js-labelFile col-md-12">
                        <div class="text-center mt-2">
                            <i class="icon fa fa-image"></i>
                            <span class="js-fileName fs-12">Pilih File</span>
                        </div>
                    </label>
                    <img class="rounded-circle img-circular mb-2 mx-auto d-block" id="preview" width="100" height="100"/>
                    <i class="fs-12 ">Maksimal 1 Mb (JPEG, JPG, PNG)</i>
                </div>
            </div>
            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        <span>
                            Daftar
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div id="dropDownSelect1"></div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');

    // file name preview
    (function () {
        'use strict';
        $('.input-file').each(function () {
            var $input = $(this),
                $label = $input.next('.js-labelFile'),
                labelVal = $label.html();

            $input.on('change', function (element) {
                var fileName = '';
                if (element.target.value) fileName = element.target.value.split('\\').pop();
                fileName ? $label.addClass('has-file').find('.js-fileName').html(fileName) : $label
                    .removeClass('has-file').html(labelVal);
            });
        });
    })();

    // image preview
    function tampilkanPreview(gambar, idpreview) {
        var gb = gambar.files;
        for (var i = 0; i < gb.length; i++) {
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview = document.getElementById(idpreview);
            var reader = new FileReader();
            if (gbPreview.type.match(imageType)) {
                preview.file = gbPreview;
                reader.onload = (function (element) {
                    return function (e) {
                        element.src = e.target.result;
                    };
                })(preview);
                reader.readAsDataURL(gbPreview);
            } else {
                Swal.fire(
                    'Tipe file tidak boleh',
                    'Harus format gambar',
                    'error'
                )
            }
        }
    }

</script>
