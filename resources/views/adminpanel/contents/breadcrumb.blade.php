<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>
            @yield('bread-title')
        </h2>
        <ol class="breadcrumb">

            <li><a href="{{ route('admin.home') }}">Home</a></li>

            @yield('bread-list')

            
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>