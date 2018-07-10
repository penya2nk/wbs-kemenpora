@extends('pages.layout.container-alt')

@section('main')

    <span class="themeFontColor" style="font-size:20px;"><b style="border-bottom: 1px solid #60615C;padding-bottom: 20px;">Pendaftaran berhasil</b></span><br><br><br>
    <p class="bg-success" style="padding: 10px; border-radius: 5px;">Selamat anda telah terdaftar sebagai member.</p><br>
    <a class="btn btn-theme2" href="{{ route('user.buat-pelaporan') }}">Buat pelaporan</a>

@endsection