@extends('pages.layout.container-alt')

@section('main')    

    <span class="themeFontColor" style="font-size:20px;"><b style="border-bottom: 1px solid #60615C;padding-bottom: 20px;">Pertanyaan anda terjawab</b></span><br><br><br>

    <div class="panel-group" id="accordion">

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Mengapa saya harus melaporkan dugaan pelanggaran?
          </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Untuk membantu RNI Group menjadi tempat yang aman, jujur dan adil untuk bekerja. Dugaan pelanggaran akan berdampak negatif kepada lingkungan kerja dan reputasi kita. Dengan melaporkan dugaan pelanggaran, anda membantu perusahaan dengan meminimalisir berbagai dugaan pelanggaran di lingkungan kerja kita bersama.</div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Bisakah saya memilih untuk tidak memberitahukan identitas?
          </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse collapse">
          <div class="panel-body"> <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Anda dianjurkan untuk memberikan data diri yang sekurang-kurangnya adalah alamat/nomor telepon/handphone/faksmili/email. Namun, itu semua terserah pada pilihan anda, apakah anda memilih untuk mengungkapkan identitas anda atau tidak. Ada kalanya identitas anda mungkin akan terlihat oleh RNI Group dari informasi yang dilaporkan. Identitas pelapor akan dirahasiakan oleh <b><b>RNI Integrity Line</b></b>, kecuali jika pelapor memilih untuk mengungkapkannya. Namun pelapor dapat tetap memilih untuk tidak mengungkapkan identitasnya. Setiap upaya yang layak dilakukan dan diperbolehkan oleh hukum akan dijalankan agar identitas pelapor tidak terungkap.</div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Apa yang terjadi jika saya melakukan panggilan?
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse collapse">
          <div class="panel-body"><span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Panggilan telepon ke <b>RNI Integrity Line</b> tidak direkam dan kami tidak memakai fasilitas ID pemanggil yang dapat mengidentifikasi panggilan. Anda tidak akan diminta oleh <b>RNI Integrity Line</b> untuk memberikan nama anda, kecuali bila anda yang ingin mengungkapkan identitas anda. Laporan anda akan dikenal hanya dengan nomor referensi, kecuali anda memilih untuk memberikan nama dan identitas kepada <b>RNI Integrity Line</b>.</div>
        </div>
      </div>

      <!-- -->

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Dugaan pelanggaran apa yang harus saya laporkan? 
          </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Anda bisa melaporkan berbagai dugaan pelanggaran yang dilakukan oleh Insan dan Pemangku Kepentingan RNI Group seperti dugaan kecurangan, dugaan korupsi, dugaan pencurian, dugaan pelanggaran kebijakan dan peraturan perusahaan, dugaan benturan kepentingan, dugaan penyuapan/gratifikasi, dugaan pelecehan seksual, dan dugaan kegiatan ilegal.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Apa yang perlu saya beritahu kepada <b>RNI Integrity Line</b>? 
          </h4>
        </div>
        <div id="collapse5" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Anda bisa melaporkan berbagai dugaan pelanggaran yang dilakukan oleh Insan dan Pemangku Kepentingan RNI Group seperti dugaan kecurangan, dugaan korupsi, dugaan pencurian, dugaan pelanggaran kebijakan dan peraturan perusahaan, dugaan benturan kepentingan, dugaan penyuapan/gratifikasi, dugaan pelecehan seksual, dan dugaan kegiatan ilegal.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Dugaan pelanggaran apa yang harus saya laporkan? 
          </h4>
        </div>
        <div id="collapse6" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Berikanlah informasi selengkap mungkin kepada <b>RNI Integrity Line</b> apabila anda melaporkan suatu dugaan pelanggaran. Contohnya seperti: 
            <p>
            <ul>
                <li>Nama orang yang terlibat/terlapor</li>
                <li>Nama saksi</li>
                <li>Tanggal, waktu dan lokasi kejadian</li>
                <li>Kronologi kejadian</li>
                <li>Bukti-bukti atas kejadian yang dilaporkan (apabila ada)</li>
                <li>Jumlah kerugian (apabila ada)</li>
                <li>Frekuensi kejadian</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Bagaimana jika saya mencurigai sesuatu dugaan pelanggaran tapi saya tidak yakin?
          </h4>
        </div>
        <div id="collapse7" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Kebanyakan kasus yang dilaporkan adalah temuan dari orang-orang yang jujur dan peduli yang pada awalnya tidak yakin akan fakta yang mereka temukan. Hal ini biasa terjadi. Kami tidak mengharapkan anda untuk mengetahui setiap rincian kejadian. Melaporkan apa yang anda ketahui sudah lebih dari cukup.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Setelah saya membuat laporan, apakah saya akan terlibat?
          </h4>
        </div>
        <div id="collapse8" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Anda tidak perlu terlibat setelah anda membuat laporan atas suatu dugaan pelanggaran. Namun jika anda mempunyai informasi baru atau tambahan, atau anda ingin membuat perubahan pada laporan anda sebelumnya, anda dapat menghubungi kami dan menyebutkan nomor referensi yang telah diberikan pada awal anda melakukan panggilan.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse9" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
           Q : Setelah dugaan pelanggaran dilaporkan, dalam jangka waktu berapa lamakah Tim Pelaporan Dugaan Pelanggaran RNI akan dihubungi? 
          </h4>
        </div>
        <div id="collapse9" class="panel-collapse collapse collapse">
          <div class="panel-body">
          <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> <b>RNI Integrity Line</b> akan mengirimkan laporan yang diterima kepada Tim Sistem Pelaporan Dugaan Pelanggaran RNI Group yang telah ditunjuk dalam waktu 1 (satu) hari kerja setelah laporan diterima. Tetapi jika anda melaporkan sesuatu yang membahayakan hidup, kami akan menghubungi Tim tersebut dengan segera. 
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse10" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Apakah saya akan mendapat penghargaan setiap melakukan pelaporan? 
          </h4>
        </div>
        <div id="collapse10" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Tidak ada bentuk penghargaan khusus yang akan diberikan dengan membuat laporan dugaan pelanggaran ke <b>RNI Integrity Line</b>.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse11" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Berapa kali saya boleh menghubungi <b>RNI Integrity Line</b>?
          </h4>
        </div>
        <div id="collapse11" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Anda boleh menghubungi <b>RNI Integrity Line</b> setiap kali anda merasa adanya dugaan pelanggaran.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse12" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Apakah penegak hukum akan diberitahu mengenai laporan yang dibuat ke <b>RNI Integrity Line</b>?
          </h4>
        </div>
        <div id="collapse12" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Informasi yang dilaporkan diberikan kepada Tim Sistem Pelaporan Dugaan Pelanggaran RNI Group yang bertanggungjawab untuk menindaklanjuti dugaan pelanggaran. Tim tersebut akan memutuskan tindakan lanjutan yang akan dilakukan, Tim tersebut mungkin akan melaporkan ke penegak hukum, jika merasa perlu. 
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse13" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Apakah akan ada proses penyelidikan setelah laporan dibuat? 
          </h4>
        </div>
        <div id="collapse13" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Dilakukannya proses penyelidikan akan tergantung pada berbagai faktor seperti informasi yang diberikan, rincian kejadian, dokumentasi dan kebijakan RNI Group. Tim Sistem Pelaporan Dugaan Pelanggaran RNI Group akan memutuskan tindakan lanjut yang diperlukan ketika mereka menerima laporan. 
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse14" style="cursor: pointer;color:#FFFFFF;background-color: #f9484b;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Informasi pribadi apa yang akan dikumpulkan oleh <b>RNI Integrity Line</b> tentang anda atau orang lain?
          </h4>
        </div>
        <div id="collapse14" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> Waktu anda melakukan panggilan ke <b>RNI Integrity Line</b>, kami akan mengumpulkan informasi tentang pelaporan dan orang-orang yang dilaporkan oleh pelapor.
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse15" style="cursor: pointer;color:#FFFFFF;background-color: #e53b3e;">
          <h4 class="panel-title">
            <span class="glyphicon glyphicon-plus-sign"></span>
            Q : Bagaimana <b>RNI Integrity Line</b> menggunakan atau mengungkapkan informasi pribadi yang didapat?
          </h4>
        </div>
        <div id="collapse15" class="panel-collapse collapse collapse">
          <div class="panel-body">
         <span class="glyphicon glyphicon-ok-sign"></span> <b>A :</b> <b>RNI Integrity Line</b> akan mempertimbangkan cara yang paling tepat untuk menggunakan atau mengungkapkan informasi pribadi yang diberikan kepadanya selama dapat membantu tindakan lanjut dugaan pelanggaran yang dilaporkannya.
          </div>
        </div>
      </div>


    </div>

@stop