@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-4">
        <div class="card mt-5">
            <div class="car-body p-3">
                <img class="mx-auto d-block" src="{{ asset('images/logo/tangsel.png') }}" width="150" alt="">
                <div class="text-center mt-2">
                    <p class="fs-30 font-weight-bold text-black">{{ $result->id_registrasi }}</p>
                </div>
                <div></div>
            </div>
        </div>
    </div>
  </div>
@endsection