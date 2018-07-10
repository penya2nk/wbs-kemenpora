@extends('pages.layout.container-alt')

@section('main')

    @inject('gs','rni\Services\GlobalServices')

    <div class="wrap-text">

        <div class="row">
            <div class="col-sm-6">
                <span class="themeFontColor" style="font-size:20px;"><b>Detail Laporan</b></span>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-theme2 btn-md" href="{{ route('user.lihat-laporan') }}">Daftar Laporan</a>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <span class="themeFontColor2" style="font-size:18px;"><b>Status Laporan :</b></span><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                No. Registrasi
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->noRegistrasi }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Tanggal dibuat
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->created_at->format('l, d F Y') }} - {{ $laporan->created_at->format('H:i') }}
            </div>
        </div>
        @if($laporan->tanggalDikirim != null)
            <div class="row">
                <div class="col-sm-3">
                    Tanggal dikirim
                </div>
                <div class="col-sm-1">
                    :
                </div>
                <div class="col-sm-8">
                    {{ date_format(date_create($laporan->tanggalDikirim),"l, d F Y - H:i") }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-3">
                Status
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">                
                @include('adminpanel.laporan.get-status',['laporan'=>$laporan])
            </div>
        </div>
        @if($laporan->noteSpi!="")

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        Penjelasan Status
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->noteSpi }}
                                                    </div>
                                                </div> 

                                                @endif
        <div class="row">
            <div class="col-sm-3">
                Informasi Pribadi
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                @if($laporan->kategoriPengirim == 1)
                    Tidak Dirahasiakan
                @else
                    Dirahasiakan
                @endif
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <span class="themeFontColor2" style="font-size:18px;"><b>Keterangan :</b></span><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Kategori Laporan
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $gs->getKategori($laporan->kategoriLaporan) }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Deskripsi Singkat
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->deskripsiSingkat }}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Deskripsi
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->deskripsi }}
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-sm-12">
                <span class="themeFontColor2" style="font-size:18px;"><b>Isi Laporan :</b></span><br><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                Kapan kejadian ini terjadi? (Tanggal/waktu yang tepat, jam kerja/diluar jam kerja)
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question1 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Siapa nama dan jabatan terlapor?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question2 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah ada orang lain yang terlibat? (Nama/Jabatan)
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question3 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah ada saksi mata? (Nama/Jabatan)
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question4 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question5}}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question6 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question7 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah kejadian ini pernah terjadi sebelumnya?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question8 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question9 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question10 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question11 }}
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Apakah anda telah melaporkan kejadian ini ke polisi/pihak yang berwajib?
            </div>
            <div class="col-sm-1">
                :
            </div>
            <div class="col-sm-8">
                {{ $laporan->question12 }}
            </div>
        </div>

        <hr>

        @include('pages.userSite.konfirmasi-laporan',['laporanId'=>$laporan->id,'laporanUuid'=>$laporan->uuid,'user'=>$gs->getUser(Auth::user()->id),'routeDetail'=>'user.detail-laporan'])

    </div>

@endsection