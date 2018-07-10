@extends('pages.layout.container-alt')

@section('main')
    <span class="themeFontColor" style="font-size:20px;"><b>Laporan berhasil dibuat</b></span><hr>


    <div class="row">

        <div class="col-sm-12">

            <p class="bg-success" style="padding: 10px; border-radius: 5px;">Terimakasih atas partisipasi anda dalam pembuatan pelaporan ini.</p><br>

            @if(Auth::user())
                <a class="btn btn-theme2" href="{{ route('user.buat-pelaporan') }}">Kembali ke halaman pelaporan</a>
                <a class="btn btn-theme2" href="{{ route('user.lihat-laporan') }}">Lihat daftar laporan</a>
            @else
                <a class="btn btn-theme2" href="{{ route('buat-pelaporan-wl') }}">Kembali ke halaman pelaporan</a>
            @endif


        </div>

    </div>

@endsection