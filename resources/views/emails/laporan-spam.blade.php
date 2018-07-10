<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title }}</title> 
</head>
<body>
  <h3>
    Laporan anda terindikasi sebagai spam.
    <!-- Hi, @if(isset($name)) {{ $name }} @endif -->
  </h3> 
  <p>
  <b>Detail laporan : </b><br><br>
  Nomor Registrasi : @if(isset($no_registrasi)) {{ $no_registrasi }} @endif<br>
  Tanggal Dibuat : @if(isset($created_at)) {{ $created_at }} @endif<br>
  Kategori : @if(isset($kategori_text)) {{ $kategori_text }} @endif<br>
  Deskripsi Singkat : @if(isset($deskripsi_singkat)) {{ $deskripsi_singkat }} @endif<br>
  Deskripsi : @if(isset($deskripsi)) {{ $deskripsi }} @endif<br>
  Informasi : @if(isset($informasi)) {{ $informasi }} @endif<br><br>

  Laporan anda telah terindikasi sebagai <b>Spam</b><br>
  Dengan Alasan : @if(isset($alasan)) {{ $alasan }} @endif<br>

  <i>
    Untuk mengetahui proses laporan yang anda buat, silahkan pantau di website <b>{!! config('app.name') !!}</b>.
  </i>
  </p>

</body>
</html>