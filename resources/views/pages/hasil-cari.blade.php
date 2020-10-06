@extends('layouts.app')
@section('content')
<div class="container-contact100">
    <div class="wrap-contact100">
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row"><a href="{{ route('cetak-data',$bukuTamu->id_registrasi) }}">{{ $bukuTamu->id_registrasi }}</a></th>
                    <td>{{ $bukuTamu->nama }}</td>
                </tr>
            </tbody>
        </table>
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
