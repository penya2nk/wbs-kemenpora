<div class="sidebar sidebar-right">
	<div class="widget box solid box-shadow">
		<h3 class="widget-title">Selamat Datang,
			@if(Auth::user())
			   {{ strtok(Auth::user()->fullname, " ") }} 
			@endif
		</h3>
		<p class="main-text">Menu : </p>
		<ul class="list-style-type-none main-text">
			<li><a href="{{ url('/lihat-laporan') }}" class="{{ (Request::segment(1)=='lihat-laporan')?'active':'' }}"><i class="fa fa-list-alt" aria-hidden="true"></i> Daftar Laporan</a></li>
			
			@if(empty(Auth::user()->email))
			<li><a href="javascript:;" style="text-decoration: line-through;color: #b3b3b3;"><i class="fa fa-pencil" aria-hidden="true"></i> Buat Pelaporan</a></li>
			@else
			<li><a href="{{ url('/buat-pelaporan') }}" class="{{ (Request::segment(1)=='buat-pelaporan')?'active':'' }}"><i class="fa fa-pencil" aria-hidden="true"></i> Buat Pelaporan</a></li>
			@endif
			
			<li><a href="{{ url('/ubah-profil') }}" class="{{ (Request::segment(1)=='ubah-profil')?'active':'' }}"><i class="fa fa-user" aria-hidden="true"></i> Ubah Profil</a></li>
			@if (!empty(Auth::user()->nip))
			<li><a href="{{ url('/ubah-email') }}" class="{{ (Request::segment(1)=='ubah-email')?'active':'' }}"><i class="fa fa-user-secret" aria-hidden="true"></i> Ubah e-mail</a></li>
			@endif
			<li><a href="{{ url('/ubah-password') }}" class="{{ (Request::segment(1)=='ubah-password')?'active':'' }}"><i class="fa fa-cog" aria-hidden="true"></i> Ubah Password</a></li>
		</ul>
        <form action="{{ url('/logout') }}" method="POST">
            <button class="btn btn-primary" type="submit" name="btn-logout" style="background: #ce0000;">Logout</button>
            {{ csrf_field() }}
        </form>
		
	</div><!-- Widget end -->
</div><!-- Sidebar end -->