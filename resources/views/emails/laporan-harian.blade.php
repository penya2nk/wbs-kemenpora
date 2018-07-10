<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lapor RNI</title>	
  <!-- <link href="{{ url('/').elixir('template/css/all.css') }}" rel="stylesheet"> -->
  <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
    background-color: #4CAF50;
    color: white;
}
  </style>
</head>
<body style="padding-left: 20px;padding-right: 20px;">
  

  <div class="row">
        <div class="col-sm-12">
            
            <h3>
              Daftar laporan terkirim hari ini.
            </h3>   

            <br>
            <p>
            Tanggal : {{ Carbon\Carbon::now()->format('l, d-m-Y') }}<br>
            Total laporan terkirim : @if(isset($total)) @if($total>0) {{ $total }} @else 0 @endif @else 0 @endif<br><br>
            </p>

        </div>
      </div>

    @if($countLaporanWeb>0)

    <div class="row">
        <div class="col-sm-12">
            <b>Laporan Member</b>, total terkirim : @if(isset($countLaporanWeb)) @if($countLaporanWeb>0) {{ $countLaporanWeb }} @else 0 @endif @else 0 @endif<br><br>
            <div class="row">
                <div class="table-responsive">
                    <div class="col-sm-12">
                        <table class="table table-hover table-bordered themeLink" id="data-laporan" padding="1">
                            <thead>
                            <tr class="themeBack2">
                                <th>Tanggal Dibuat</th>
                                <th>Deskripsi Singkat</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                            </tr>
                            </thead>
                            <tbody>    
                                                    @foreach($laporanWeb as $lap)
                                                    <tr>
                                                        <td>{{ $lap->created_at->format('d m Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                    </tr>
                                                    @endforeach
                            </tbody>                
                        </table>
                    </div>
                </div>
            </div>

        </div>
      </div>

      @endif

      <br>
     
      <br>

  @if($countLaporanLain>0)

    <div class="row">
        <div class="col-sm-12">
            <b>Laporan Non-Member</b>, total terkirim : @if(isset($countLaporanLain)) @if($countLaporanLain>0) {{ $countLaporanLain }} @else 0 @endif @else 0 @endif<br><br>
            <div class="row">
                <div class="table-responsive">
                    <div class="col-sm-12">
                        <table class="table table-hover table-bordered themeLink" id="data-laporan">
                           <thead>
                            <tr class="themeBack2">
                                <th>Tanggal Dibuat</th>
                                <th>Deskripsi Singkat</th>
                                <th>Deskripsi</th>
                                <th>Kategori</th>
                            </tr>
                           </thead>
                           <tbody>
                                                    @foreach($laporanLain as $lap)
                                                    <tr>
                                                        <td>{{ $lap->created_at->format('d m Y') }} - {{ $lap->created_at->format('H:i:s') }}</td>
                                                        <td>{{ $lap->deskripsiSingkat }}</td>
                                                        <td>{{ $lap->deskripsi }}</td>
                                                        <td>{{ $lap->kategori_laporan->kategori }}</td>
                                                    </tr>
                                                    @endforeach
                                  </tbody>            
                        </table>
                    </div>
                </div>
            </div>

        </div>
      </div>

      @endif
      <br>

  <div class="row">
        <div class="col-sm-12">
            
            <p>
            <i>
              Untuk mengetahui proses laporan-laporan diatas, silahkan pantau di website <b>{!! config('app.name') !!}</b>.
            </i>
            </p>

        </div>
      </div>

  

</body>
</html>