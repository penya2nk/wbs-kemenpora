<style type="text/css">
	hr.style9 {
		border-top: 1px dashed #8c8b8b;
		border-bottom: 1px dashed #fff;
	}
	hr.style8 {
		border-top: 1px solid #8c8b8b;
		border-bottom: 1px solid #fff;
	}
	hr.style8:after {
		content: '';
		display: block;
		margin-top: 2px;
		border-top: 1px solid #8c8b8b;
		border-bottom: 1px solid #fff;
	}
	tr.spaceUnder > td
	{
	  padding-bottom: 2em;
	}
	div.breakNow { page-break-inside:avoid; page-break-after:always; }
</style>

@inject('global_service','rni\Services\GlobalServices')

<h2>Detail Laporan</h2>
<hr class="style8">
<br>
<h3>Status Laporan : </h3>

<table width="100%">
	<tr valign="top">
		<td width="30%">No. Registrasi</td>
		<td width="5%">:</td>
		<td>{{ $laporan->noRegistrasi }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Tanggal dibuat</td>
		<td width="5%">:</td>
		<td>{{ $laporan->created_at->format('l, d F Y') }} - {{ $laporan->created_at->format('H:i') }}</td>
	</tr>
	@if($laporan->tanggalDikirim != null)
	<tr valign="top">
		<td width="30%">Tanggal dikirim</td>
		<td width="5%">:</td>
		<td>{{ date_format(date_create($laporan->tanggalDikirim),"l, d F Y - H:i") }}</td>
	</tr>
	@endif
	<tr valign="top">
		<td width="30%">Status</td>
		<td width="5%">:</td>
		<td>@include('adminpanel.laporan.get-status',['laporan'=>$laporan])</td>
	</tr>
</table>

<br>
<hr class="style9">
<h3>Informasi Pelapor : </h3>

<table width="100%">
	<tr valign="top">
		<td width="30%">Nama</td>
		<td width="5%">:</td>
		<td>{{ $laporan->fullname }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Alamat</td>
		<td width="5%">:</td>
		<td>{{ $laporan->address }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">No. Telepon</td>
		<td width="5%">:</td>
		<td>{{ $laporan->phoneNumber }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">No. Handphone</td>
		<td width="5%">:</td>
		<td>{{ $laporan->handphoneNumber }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Email</td>
		<td width="5%">:</td>
		<td>{{ $laporan->email }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">No. KTP</td>
		<td width="5%">:</td>
		<td>{{ $laporan->identityNumber }}</td>
	</tr>
</table>

<br>
<hr class="style9">
<h3>Keterangan : </h3>

<table width="100%">
	<tr valign="top">
		<td width="30%">Kategori Laporan</td>
		<td width="5%">:</td>
		<td>{{ $global_service->getKategori($laporan->kategoriLaporan) }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Deskripsi Singkat</td>
		<td width="5%">:</td>
		<td>{{ $laporan->deskripsiSingkat }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Deskripsi</td>
		<td width="5%">:</td>
		<td>{{ $laporan->deskripsi }}</td>
	</tr>
</table>

<br>
<hr class="style9">
<h3>Isi Laporan : </h3>

<table width="100%">
	<tr valign="top">
		<td width="30%">Kapan kejadian ini terjadi? (Tanggal/waktu yang tepat, jam kerja/diluar jam kerja)</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question1 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Siapa nama dan jabatan terlapor?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question2 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah ada orang lain yang terlibat? (Nama/Jabatan)</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question3 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah ada saksi mata? (Nama/Jabatan)</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question4 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Bagaimana kejadian ini terjadi? (Jelaskan kronologinya)</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question5 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah kejadian ini mengakibatkan kerugian secara finansial terhadap perusahaan?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question6 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Jika ya, berapa besar jumlah kerugian finansial yang diperkirakan?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question7 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah kejadian ini pernah terjadi sebelumnya?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question8 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah terdapat dokumentasi atau bukti-bukti yang berkaitan dengan kejadian yang dilaporkan?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question9 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah anda telah melaporkan kejadian tersebut melalui sarana lain atau kepada pihak lain? Jika ya, melalui sarana apa dan kepada siapa?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question10 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah anda sudah berbicara dengan terlapor? Jika sudah, tanggapan apa yang dia/mereka berikan?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question11 }}</td>
	</tr>
	<tr valign="top">
		<td width="30%">Apakah anda telah melaporkan kejadian ini ke polisi/pihak yang berwajib?</td>
		<td width="5%">:</td>
		<td>{{ $laporan->question12 }}</td>
	</tr>
</table>