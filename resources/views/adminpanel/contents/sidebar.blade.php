@inject('global_service','rni\Services\RoleServices')
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                            
                    <strong class="font-bold h4" style="color:white;">
                        {{ $global_service->getRoleName(Auth::user()->roleId) }}         
                    </strong>
                    
                </div>
                <div class="logo-element" style="font-size: 13px;">
                    WBS KEMENPORA
                </div>
            </li>
            <li {!! (Route::is('admin.home') ? 'class="active"' : '') !!} >
                <a href="{{ route('admin.home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            @if(Auth::user()->roleId == 2)
            <li {!! (Route::is('operator.input-laporan') ? 'class="active"' : '') !!} >
                <a href="{{ route('operator.input-laporan') }}"><i class="fa fa-pencil-square-o "></i> <span class="nav-label">Input Laporan</span></a>
            </li>
            @endif
            @if(Auth::user()->roleId == 2 || Auth::user()->roleId == 3)
            <li {!! (Route::is('laporan.laporan-web-member') ? 'class="active"' : '') !!}
            {!! (Route::is('laporan.laporan-web-nonmember') ? 'class="active"' : '') !!}
            {!! (Route::is('laporan.laporan-detail') ? 'class="active"' : '') !!}
            {!! (Route::is('laporan.laporan-detail-alt-2') ? 'class="active"' : '') !!}>
                <a href="{{ route('laporan.laporan-web-member') }}"><i class="fa fa-envelope-square"></i> <span class="nav-label">Online</span></a>
            </li>

            <li {!! (Route::is('laporan.laporan-non-website') ? 'class="active"' : '') !!} {!! (Route::is('laporan.laporan-detail-alt') ? 'class="active"' : '') !!} {!! (Route::is('operator.edit-laporan') ? 'class="active"' : '') !!} >
                <a href="{{ route('laporan.laporan-non-website') }}"><i class="fa fa-envelope"></i> <span class="nav-label">Non Online</span></a>
            </li>
            @endif
            @if(Auth::user()->roleId == 4)
            <li {!! (Route::is('super.user') ? 'class="active"' : '') !!} {!! (Route::is('super.user-add') ? 'class="active"' : '') !!}
            {!! (Route::is('super.user-edit') ? 'class="active"' : '') !!}>
                <a href="{{ route('super.user') }}"><i class="fa fa-user"></i> <span class="nav-label">User Management </span></a>
            </li>
            <li class="{{ (Request::segment(3)=='pengaturan-kategori')?'active':'' }}">
                <a href="{{ route('super.pengaturan.kategori') }}"><i class="fa fa-list" aria-hidden="true"></i> <span class="nav-label">Pengaturan Kategori </span></a>
            </li>
            <li class="{{ (Request::segment(3)=='pengaturan-faq')?'active':'' }}">
                <a href="{{ route('super.pengaturan.faq') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> <span class="nav-label">Pengaturan FAQ </span></a>
            </li>
            @endif
        
            
         
            
        </ul>

    </div>
</nav>