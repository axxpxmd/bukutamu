@extends('layouts.app')
@section('content')
<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="needs-validation contact100-form" action="{{ route('getId') }}" method="POST" enctype="multipart/form-data" novalidate>
            @csrf
            <div class="wrap-input100 validate-input">
                <span class="label-input100 font-weight-bold">ID Registrasi</span>
                <input type="text" class="input100 form-control" style="border: none" name="id_registrasi" id="id_registrasi" placeholder="Masukan ID Registrasi" required>
            </div>
            <div class="container-contact100-form-btn mt-n4">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
                        <span>
                            Cari
                            <i class="fa fa-search m-l-7" aria-hidden="true"></i>
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
</script>
