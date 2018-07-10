@extends('pages.layout.container-alt')

@section('main')

    @inject('global_service', 'rni\Services\GlobalServices')

    <span class="themeFontColor" style="font-size:20px;"><b style="border-bottom: 1px solid #60615C;padding-bottom: 20px;">Pembuatan Laporan dapat dilakukan dengan 6 (enam) cara:</b></span><br><br>
    <p>Pembuatan Laporan dapat dilakukan dengan 6 (enam) cara:</p>
    <p>
        <ol>
            <b>
                <li>
    <p>Online</p>

    </li>
    </b>
    <p>
        Untuk membuat laporan secara online, dapat dilakukan melalui link <b>"Membuat Pelaporan"</b> yang terletak pada bawah halaman atau 
        @if(Auth::user())
        <a href="{{ route('user.buat-pelaporan') }}">klik disini</a> 
        @else
        <a href="{{ route('buat-pelaporan-wl') }}">klik disini</a> 
        @endif
        atau melalui website <a href="http://www.rni.co.id" target="_blank">www.rni.co.id</a>.
    </p>

    <b>
        <li>
            <p>Telepon</p>

        </li>
    </b>
    <p><b>(021) 806 42 731</b></p>
    <p>Hotline ini dibuka selama jam kantor (09:00 - 17:00) .</p>
    <p>Anda akan terhubung dengan operator Contact Center <b>RNI Integrity Line</b> yang akan menanyakan anda beberapa pertanyaan mengenai tindakan dugaan pelanggaran.</p>
    <p>Layanan ini bersifat anonim. Anda tidak akan diminta untuk memberitahukan identitas, kecuali anda bersedia mengungkapkannya.</p>
    <p>Diluar jam kerja anda bisa meninggalkan pesan dalam Bahasa Indonesia dalam mailbox.</p>


    <b>
        <li>
            <p>Faksimili</p>
        </li>
    </b>
    <p>Anda dapat mengirimkan faksimili (mohon menggunakan formulir yang disediakan) ke:</p>
    <p><b>(021) 316 1202</b></p>
    <p>Hotline ini dibuka selama 24 jam.</p>
    <p>Anda diminta untuk memberikan informasi sebanyak mungkin mengenai tindakan dugaan pelanggaran pada formulir yang tersedia.</p>
    <p>Unduh formulir <a href="docs/RNI Disclosure Cover Sheet-id.pdf" target="_blank">disini</a>.</p>


    <b>
        <li>
            <p>Email</p>

        </li>
    </b>
    <p>Anda dapat mengirimkan email ke:</p>

    <p><b><a href="mailto:lapor.rni@reandabernardi.com">lapor.rni@reandabernardi.com</a></b></p>

    <p style="font-size: 14px;" class="themeFontColor"><i>*Ukuran maksimum file attachment(s) 10 MB</i></p>

    <p>Dengan format :</p>
    <div class="bg-success" style="padding: 20px;border-radius: 5px;background: #efefef;">

    <div class="row">
        <div class="col-sm-4">
        Nama
        </div>
        <div class="col-sm-1">
        :
        </div>
        <div class="col-sm-7">
        (Nama lengkap anda)
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
        Deskripsi Singkat
        </div>
        <div class="col-sm-1">
        :
        </div>
        <div class="col-sm-7">
        (Contoh : Pencurian laptop di lantai 2)
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
        Kategori
        </div>
        <div class="col-sm-1">
        :
        </div>
        <div class="col-sm-7">
        {!! Form::select('kategoriLaporan', $global_service->getKategoriList(), null, ['placeholder' => '-- Pilih Kategori Laporan --','class'=>'form-control select']) !!}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
        Deskripsi lengkap/kronologi
        </div>
        <div class="col-sm-1">
        :
        </div>
        <div class="col-sm-7">
        (Penjelasan kejadian)
        </div>
    </div>
    
    </div>
    <p></p>
    

    <p>Anda diminta untuk memberikan informasi sebanyak mungkin sehubungan dengan tindakan yang dilaporkan dalam e-mail anda. Alamat e-mail anda tidak akan diberikan ke Tim Sistem Pelaporan Dugaan Pelanggaran <b>RNI Group</b> tanpa seijin anda.</p>


    <b>
        <li>
            <p>Surat</p>

        </li>
    </b>
    <p>Anda dapat mengirimkan surat (mohon menggunakan formulir yang disediakan) ke:</p>
    <p><b>RNI Integrity Line</b><br>
        Gedung Reanda Bernardi<br>
        JL. Cikini Raya No.9 Menteng<br>
        Jakarta Pusat 10330
    </p>
    <p>Unduh Formulir <a href="docs/RNI Disclosure Cover Sheet-id.pdf" target="_blank">disini</a>.</p>

    <b>
        <li>
            <p>SMS / WhatsApp (WA) / Call Center</p>

        </li>
    </b>
    <p>Anda dapat mengirimkan SMS ke nomor:</p>
    <p><b>0813 1626 1447</b></p>

    <p>Dengan format : </p>
    <p><b>Nama#DeskripsiSingkat#Kategori#Deskripsi/Kronologi</b></p>

    <strong><span style="font-size: 15px;color:">* Untuk memilih kategori silahkan anda lihat di halaman "Apa yang dilaporkan", sebagai contoh "Dugaan Kecurangan"</span></strong>

    <p></p>
    </p>
    <p></p>
    <p></p>
    <p></p>
    <p>Hotline ini dibuka selama 24 jam.</p>
    <p>Apa yang terjadi kemudian?</p>
    <p>Setelah anda melaporkan, laporan tersebut akan di teruskan kepada analis <b>REANDA BERNARDI</b> yang akan mengkaji informasi yang anda berikan. Kemudian analis tersebut akan membuat laporan tertulis dalam waktu 1 (satu) hari kerja kepada Tim Sistem Pelaporan Dugaan Pelanggaran <b>RNI Group</b> yang akan menentukan tindakan selanjutnya yang dibutuhkan.</p>
    </ol>

@stop