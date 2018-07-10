@extends('adminpanel.layout.template')

@section('bread-title')
    Detail Laporan
@endsection

@section('bread-list')
    <li><a href="{{ route('laporan.laporan-non-website') }}">Laporan Non-website</a></li>    
    <li><strong>Detail Laporan</strong></li>
@endsection

@section('content')

    @inject('global_service','rni\Services\GlobalServices')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5><span class="text-navy">Detail Laporan</span></h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>                                                                                            
                            </div>
                        </div>
                        <div class="ibox-content">
                            
                            <div class="row">
                            <div class="col-sm-12" style="padding-right: 40px;padding-left: 40px;">

                                <div class="row">                        

                                        <div class="col-sm-12">

                                            <div class="wrap-text">

                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <span class="text-navy" style="font-size:20px;"><b>Detail Laporan</b></span>
                                                        &nbsp;&nbsp;
                                                        {{-- teruskan laporan --}}
                                                        <a href="{{ route('operator.kirim-laporan',['id'=>$laporan->id]) }}" style="background-color: #f3f3f4;padding: 10px; border-radius: 5px;"><i class="fa fa-paper-plane" aria-hidden="true"></i>&nbsp;<b>Teruskan Laporan</b></a>
                                                        {{-- Download laporan --}}
                                                        <a href="{{ route('laporan.nonmember.download',['id'=>$laporan->id]) }}" target="_blank" style="background-color: #f3f3f4;padding: 10px; border-radius: 5px;"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;<b>Download Laporan</b></a>
                                                        @if($laporan->jalurId!=1)
                                                        @if(Auth::user()->roleId==2)
                                                        @if($laporan->statusId==1 || $laporan->statusId==3)
                                                            &nbsp;&nbsp;
                                                          
                                                                <a href="{{ route('operator.edit-laporan', ['id'=>$laporan->id])  }}" style="background-color: #f3f3f4;padding: 10px; border-radius: 5px;">
                                                                    <span class="glyphicon glyphicon-pencil"></span>
                                                                    <b>Edit</b>
                                                                </a>
                                                         
                                                        @endif
                                                        @endif
                                                        @endif
                                                    </div>
                                                    <div class="col-sm-4 themeLink text-right">

                                                        @include('adminpanel.laporan.status-alt',['laporan'=>$laporan])
                                                        
                                                    </div>
                                                </div>

                                                <div class="hr-line-dashed"></div>

                                                @if($laporan->spam!="")                                            

                                                <div class="row" style="padding: 10px; padding-left: 20px;padding-right: 20px; border-radius: 5px;background: #ec4758;color: white;" align="left">

                                                <strong>Terindikasi Spam : &nbsp;</strong>

                                                {{ $laporan->spam }}

                                                </div>

                                                <div class="hr-line-dashed"></div>

                                                @endif

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
                                               
                                               @if($laporan->kategoriPengirim == 1)
                                                <div class="hr-line-dashed"></div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="themeFontColor2" style="font-size:18px;"><b>Informasi Pelapor :</b></span><br><br>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        Nama
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->fullname }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        Alamat
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->address }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        No. Telepon
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->phoneNumber }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        No. Handphone
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->handphoneNumber }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        Email
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->email }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        No. KTP
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->identityNumber }}
                                                    </div>
                                                </div>
                                               @else

                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        Informasi Pelapor
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        Dirahasiakan
                                                    </div>
                                                </div>
                                               @endif

                                                <div class="hr-line-dashed"></div>

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
                                                        {{ $global_service->getKategori($laporan->kategoriLaporan) }}
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

                                                <div class="hr-line-dashed"></div>

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
                                                        Apakah anda telah melaporkan kejadian ini ke polisi/pihak berwajib/pihak lainnya?
                                                    </div>
                                                    <div class="col-sm-1">
                                                        :
                                                    </div>
                                                    <div class="col-sm-8">
                                                        {{ $laporan->question12 }}
                                                    </div>
                                                </div>

                                                <div class="hr-line-dashed"></div>

                                                @if($laporan->uploadFile != null)

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <span class="themeFontColor2" style="font-size:18px;"><b>Lampiran :</b></span><br><br>
                                                    </div>
                                                </div> 

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        @if($global_service->getFiles($laporan->uploadFile) == null)

                                                            <div class="well m-t">Tidak ada file yang terupload</div>

                                                        @else

                                                            @foreach($global_service->getFiles($laporan->uploadFile) as $file)

                                                                <div class="simple_tag" style="padding: 15px;font-size: 13px;">

                                                                    {{ substr($file,strlen('uploadFiles/'.$laporan->uploadFile.'/')) }}<strong> ({{ $global_service->getFileSize($file) }})</strong>

                                                                    <a href="{{ route('laporan.lampiran',['param1'=>$laporan->uploadFile,'param2'=>substr($file,strlen('uploadFiles/'.$laporan->uploadFile.'/'))]) }}" style="padding-left: 10px;">
                                                                        <span class="glyphicon glyphicon-download-alt"></span>
                                                                    </a>
                                                                    

                                                                </div>                                                

                                                            @endforeach

                                                        @endif
                                                    </div>
                                                </div> 

                                                <br><div class="hr-line-dashed"></div>

                                                @endif

                                                <div class="row">
                                                    <div class="col-sm-6">
                                                       
                                                    </div>
                                                    <div class="col-sm-6 themeLink text-right">                 

                                                        @include('adminpanel.laporan.status-alt',['laporan'=>$laporan])
                                                        
                                                    </div>
                                                </div>                                          

                                            </div>

                                        </div>

                                    </div>

                                    @include('adminpanel.laporan.laporan-konfirmasi',['laporanId'=>$laporan->id,'laporanUuid'=>$laporan->uuid,'user'=>$global_service->getUser(Auth::user()->id),'routeDetail'=>'laporan.laporan-detail-alt'])

                            </div>
                            </div>
                            <br>
                            <br>

                        </div>
                    </div>
                </div>
        </div>
    </div>

    

@endsection