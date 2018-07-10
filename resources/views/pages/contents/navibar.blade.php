<!--NAVIGATION BAR -->
<nav class="navbar navbar-default navbar-fixed-top" style="box-shadow: 1px 6px 16px #60615C;">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-left">
                <li
                        {!! (Route::is('home') ? 'class="active"' : '') !!}
                        {!! (Route::is('sukses-daftar') ? 'class="active"' : '') !!}
                        {!! (Route::is('reset') ? 'class="active"' : '') !!}
                   ><a href="{{ route('home') }} ">Beranda</a></li>
                <li {!! (Route::is('tentang') ? 'class="active"' : '') !!}><a href="{{ route('tentang') }}">Tentang</a></li>
                <li {!! (Route::is('pelaporan') ? 'class="active"' : '') !!}><a href="{{ route('pelaporan') }}">Apa yang dilaporkan</a></li>
                <li {!! (Route::is('faq') ? 'class="active"' : '') !!}><a href="{{ route('faq') }}">FAQ</a></li>
                <li {!! (Route::is('cara-lapor') ? 'class="active"' : '') !!}><a href="{{ route('cara-lapor') }}">Cara lapor</a></li>
                <li
                        {!! (Route::is('user.buat-pelaporan') ? 'class="active"' : '') !!}
                        {!! (Route::is('buat-pelaporan-wl') ? 'class="active"' : '') !!}
                        {!! (Route::is('login-page') ? 'class="active"' : '') !!}
                        {!! (Route::is('daftar') ? 'class="active"' : '') !!}
                >
                @if(Auth::user())
                <a href="{{ route('user.buat-pelaporan') }}">Melaporkan</a>
                @else
                <a href="{{ route('buat-pelaporan-wl') }}">Melaporkan</a>
                @endif
                </li>
                @if(Auth::user())

                    <li
                            {!! (Route::is('user.lihat-laporan') ? 'class="active"' : '') !!}
                            {!! (Route::is('user.detail-laporan') ? 'class="active"' : '') !!}
                        ><a href="{{ route('user.lihat-laporan') }}">Daftar Laporan</a></li>
                    <li {!! (Route::is('user.ubah-profil') ? 'class="active"' : '') !!}><a href="{{ route('user.ubah-profil') }}">Ubah Profil</a></li>
                @endif
                <!-- <li class="disabled"><a href="#">Statistik</a></li> -->
            </ul>
            @if(Auth::user())
                <div align="right">
                    <form action="{{ url('/logout') }}" method="POST">
                        <button class="btn btn-md btn-theme2" type="submit" name="btn-logout-nav1" style="position: relative;margin-top: 8px;"><span class="glyphicon glyphicon-user"></span><strong>&nbsp;Keluar</strong></button>
                        {{ csrf_field() }}
                    </form>
                </div>
            @else
                <div align="right">
                    <a href="{{ url('/login') }}" style="text-decoration: none;">
                        <button class="btn btn-md btn-theme2 btn-yellow" type="button" name="btn-login-nav2" style="position: relative;margin-top: 8px;"><span class="glyphicon glyphicon-user"></span><strong>&nbsp;Masuk</strong></button>
                    </a>                    
                    <a href="{{ url('/register') }}">
                    <button class="btn btn-md btn-theme2 btn-blue" type="button" name="btn-login-nav3" style="position: relative;margin-top: 8px;"><span class="glyphicon glyphicon-book"></span><strong>&nbsp;Daftar</strong></button>
                    </a>
                </div>
            @endif
        </div>
    </div>
</nav>
<!-- NAVIGATION BAR -->