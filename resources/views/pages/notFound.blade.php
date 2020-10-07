@extends('layouts.app')
@section('content')
<div class="container-contact100">
    <div class="wrap-contact100">
        <p class="text-center">ID Registrasi Tidak Ditemukan !</p>
        <div class="text-center mt-4 mb-n2">
            <div class="container-contact100-form-btn mt-n4">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <a class="text-white" href="{{ route('cariId') }}">
                        <button class="contact100-form-btn">
                            <span>
                                Cari Lagi
                                <i class="fa fa-search m-l-7" aria-hidden="true"></i>
                            </span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
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
