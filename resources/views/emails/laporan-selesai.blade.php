<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SIPPATEN</title>	
</head>
<body>
  <h3>
  	Laporan anda telah selesai.
  </h3> 
  <p>
    <b>Nomor Registrasi : @if(isset($no_registrasi)) {{ $no_registrasi }} @endif</b><br>
  </p>

  <i>
    Untuk mengetahui proses laporan yang anda buat, silahkan pantau di website <b>{!! config('app.name') !!}</b>.
  </i>
  </p>

</body>
</html>