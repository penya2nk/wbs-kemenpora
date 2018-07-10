<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="klakklik" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{!! config('app.name') !!}</title>

    <!-- CSS -->
    <link href="{{ url('/') }}/template-admin/css/all.css" rel="stylesheet" type="text/css" />

    <!-- FONT -->
    <link href="{{ url('/').elixir('template-admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ url('/').elixir('template-admin/fonts/jquery.filer-icons/jquery-filer.css') }}" rel="stylesheet">
    <link href="{{ url('/') }}/template-admin/css/style.css" rel="stylesheet" type="text/css" />

    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{ url('/') }}/template-admin/js/compressed.js"></script>

</head>
<body>
    <div id="wrapper">
        @include('adminpanel.contents.sidebar')

        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('adminpanel.contents.topbar')
            @include('adminpanel.contents.breadcrumb')
            @yield('content')
            @include('adminpanel.layout.footer')
        </div>
        
    </div>

    <a href="#" id="toTop" style="display: inline;"><span id="toTopHover" style="opacity: 0;"></span>To Top</a>

    @stack('ad-js')


</body>

<script type="text/javascript" src="{{ url('/') }}/template-admin/js/functions.js"></script>

</html>