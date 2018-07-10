@extends('pages.layout.container-alt')

@section('main')
    <style type="text/css">
        b{
            font-size: 18px;
            font-weight: bolder;
        }
        ol{
            line-height: 30px;
        }
        #my_popup_background{opacity: 0.7 !important;}
    </style>

    @if(!(Auth::user()))
    <!-- Add content to the popup -->
    <div id="my_popup">
        <!-- Add an optional button to close the popup -->
        {{-- <button class="my_popup_close"><span class="glyphicon glyphicon-remove"></span> Tutup</button> --}}
        <center><img src="{{ url('/') }}/template/images/new-banner.jpg" width="100%"></center>
    </div>
    @endif

    <span class="themeFontColor" style="font-size:20px;display: block;"><b style="border-bottom: 1px solid #60615C;padding-bottom: 20px;">RNI Integrity Line</b></span><br>
    <!-- <p>Kita ingin memastikan <b>RNI Group</b> tetap menjadi tempat yang aman, adil dan jujur untuk bekerja.</p>
    <p>Manajemen PT Rajawali Nusantara Indonesia (Persero) beserta anak perusahaannya (RNI Group) terus bertekad untuk menjadi tempat yang aman, adil, dan jujur untuk bekerja. Tekad ini diwujudkan melalui penerapan prinsip-prinsip Good Corporate Governance (“GCG”) yang konsisten dan berkesinambungan dalam aktifitas perusahaan sehari-hari.</p>
    <p>Sebagai salah satu perwujudan GCG, RNI Group berkomitmen untuk membuka kesempatan luas kepada setiap orang dan pihak lainnya yang terkait dengan RNI Group (Stakeholder) untuk dapat mengawasi aktifitas perusahaan. Untuk itu, RNI Group meluncurkan <b>RNI Integrity Line</b> sebagai Sistem Pelaporan Pelanggaran yang terbuka untuk semua orang dan pemangku kepentingan RNI Group termasuk karyawan pelanggan, pemasok, kreditur, debitur, perbankan dan lainnya.</p>
    <p>Melalui sistem ini, setiap orang dan pemangku kepentingan RNI Group dapat menyampaikan laporan mengenai dugaan pelanggaran yang dilakukan oleh Insan RNI Group terhadap prinsip-prinsip GCG yaitu Transparency, Accountability, Responsibility, Independency, dan Fairness (TARIF), serta Nilai-Nilai Etika Utama (In-Protect-Excellent) dan Code of Conduct yang berlaku. Setiap laporan dapat disampaikan dengan dilengkapi bukti-bukti yang dapat dipertanggungjawabkan, yang sekiranya dapat mendukung atau memperjelas dugaan pelanggaran yang telah terjadi.</p>
    <p>RNI Group berharap dengan adanya <b>RNI Integrity Line</b> ini, pelanggaran dapat dicegah atau dideteksi secara lebih dini. Dengan sistem yang independen, diawasi oleh berbagai pihak dan ditindaklanjuti dengan tegas, RNI Group berharap dapat memberikan efek keengganan bagi calon pelanggar.</p>
    <p>Lingkup pengaduan yang akan ditindaklanjuti oleh <b>RNI Integrity Line</b> meliputi dugaan pelanggaran sebagai berikut:</p>
    <p>
    <ul>
        <li>Kecurangan</li>
        <li>Korupsi</li>
        <li>Pencurian</li>
        <li>Pelanggaran Kebijakan dan Peraturan Perusahaan</li>
        <li>Benturan Kepentingan</li>
        <li>Penyuapan dan Gratifikasi</li>
        <li>Pelecehan Seksual</li>
        <li>Kegiatan Ilegal</li>
    </ul>
    </p>
    <p>Apabila anda mengetahui adanya pelanggaran yang terjadi di RNI Group dan termasuk dalam lingkup tersebut di atas maka segera laporkan melalui <b>RNI Integrity Line</b> ini.</p>
    <p>Dengan melaporkan pelanggaran, Anda telah ikut berperan aktif bersama RNI Group dalam mewujudkan lingkungan kerja yang aman, adil dan jujur dalam bekerja.</p> -->
    <p>
        <b>RNI Integrity Line</b> dibangun untuk mewujudkan <b>RNI</b> sebagai tempat yang aman, adil dan jujur dalam bekerja sesuai dengan penerapan prinsip-prinsip <b>Good Corporate Governance (GCG)</b> yang konsisten dan berkesinambungan dalam aktifitas perusahaan sehari-hari.
    </p>

    <p>
        Sebagai salah satu perwujudan <b>GCG</b>, <b>RNI</b> berkomitmen untuk membuka kesempatan luas kepada setiap insan <b>RNI</b> untuk dapat berperan aktif atau memberi masukan atas mengawasi aktifitas perusahaan melalui <b>RNI Intergrity Line</b>. <b>RNI Integrity Line</b> merupakan sistem Pelaporan Dugaan Pelanggaran dan atau masukan lainnya untuk memastikan perusahaan (karyawan, direksi dan dewan komisaris) berjalan sesuai dengan prinsip-prinsip <b>GCG</b> yaitu <b>Transparancy</b>, <b>Accountability</b>, <b>Responsibility</b>, <b>Independency</b> dan <b>Fairness</b>, serta nilai-nilai Etika Utama, yaitu <b>Professionalism</b>, <b>Integrity</b>, <b>Teamwork</b>, <b>Excellence</b> dan <b>Respect (PINTER)</b> dan <b>Code Of Conduct</b> yang berlaku. 
    </p>

    <p>
        <b>RNI</b> berharap dengan adanya <b>RNI Integrity Line</b> ini, pelanggaran dapat dicegah atau dideteksi secara lebih dini dan menjadi masukan bagi pihak-pihak terkait untuk mengantisipasi atau melakukan langkah-langkah perbaikan. 
    </p>

    <p>
        Ruang lingkup <b>RNI Intergrity Line</b> dapat menampung pengaduan dana tau masukan dari seluruh pemangku kepentingan, meliputi antara lain :
        <ol>
            <li>
                Dugaan Kecurangan (Fraud)
            </li>
            <li>
                Dugaan Korupsi, Kolusi dan Nepotime
            </li>
            <li>
                Dugaan perbuatan melanggar hukum (termasuk penggunaan kekerasan terhadap karyawan/pimpinan, pemerasan, penggunaan narkoba, pelecehan, perbuatan kriminal lainnya)
            </li>
            <li>
                Dugaan Pelanggaran Etika Perusahaan atau Pelanggaran norma-norma kesopanan pada umumnya.
            </li>
            <li>
                Dugaan Pelanggaran Kebijakan, Peraturan Perusahaan, dan Standard operating procedure (SOP). Termasuk diantaranya namun tidak terbatas pada prosedur pengadaan barang dan jasa.
            </li>
        </ol>
    </p>

@stop