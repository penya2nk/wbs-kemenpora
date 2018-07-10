<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title }}</title> 
</head>
<body>
  <h3>
    Ada laporan masuk
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

  Laporan sedang dalam status <b>Menunggu</b><br>
  </p>

</body>
</html>