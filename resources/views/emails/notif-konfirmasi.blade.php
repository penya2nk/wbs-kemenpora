<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>{{ $title }}</title> 
</head>
<body>
  <h3>
    Hi, {{ $nama_penerima }}
  </h3> 
  <p>
  <h3>Anda memiliki pesan baru.</h3>
  <hr>
  <br>
  </p>
  <a style="border-radius:10px;padding:15px;background: #444e84;color: #FFFFFF;font-size: 21px;font-weight: bolder;text-decoration: none;width: 300px;height: 200px;" href="{{ route('user.detail-laporan',['id'=>base64_encode($laporanID)]) }}">Lihat Pesan</a>
  <br>
  <br>
</body>
</html>