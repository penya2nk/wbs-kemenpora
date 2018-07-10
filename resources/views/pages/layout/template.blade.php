<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="klakklik" />

    <title>RNI Integrity Line</title>


    {{--<!-- Fonts -->--}}
    {{--<link href="{{ url('/').elixir('template/fonts/Lato/latofonts.css') }}" rel="stylesheet">--}}
    {{--<link href="{{ url('/').elixir('template/fonts/Lato/latostyle.css') }}" rel="stylesheet">--}}

    {{--<!-- CSS -->--}}



    <link href="{{ url('/').elixir('template/css/all.css') }}" rel="stylesheet">

    

    <link href="{{ url('/').elixir('template/fonts/Lato/latofonts.css') }}" rel="stylesheet">
    <link href="{{ url('/').elixir('template/fonts/Lato/latostyle.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/').elixir('template/css/component.css') }}">
    <link rel="stylesheet" type="text/css" href="https://daneden.github.io/animate.css/animate.min.css">    
    
    <!-- SCRIPTS -->
    <script type="text/javascript" src="{{ url('/') }}/template/js/compressed.js"></script>
    <script type="text/javascript" src="http://dev.vast.com/jquery-popup-overlay/jquery.popupoverlay.js"></script>  
    <style type="text/css">
        #my_popup{
            width: 25%;
        }
        #logo-rni{
            position:relative;
            top:-20px;
        }
        /* Custom, iPhone Retina */ 
        @media only screen and (min-width : 320px) {
            #logo-rni{
                position:relative;
                top:-20px;
                margin-top: 35px;
            }
            #my_popup{
                width: 51% !important;
            }
        }

        /* Extra Small Devices, Phones */ 
        @media only screen and (min-width : 480px) {
            #logo-rni{
                position:relative;
                top:-20px; 
            }
            #my_popup{
                width: 35% !important;
            }
        }

        /* Small Devices, Tablets */
        @media only screen and (min-width : 768px) {
            #logo-rni{
                position:relative;
                top:-20px; 
            }
            #my_popup{
                width: 33% !important;
            }
        }

        /* Medium Devices, Desktops */
        @media only screen and (min-width : 992px) {
            #logo-rni{
               margin-top: 40px; 
            }
            #my_popup{
                width: 33% !important;
            }
        }
    </style>      

</head>
<body id="startPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    @include('pages.layout.header')

    @yield('content')     

    {{--footer--}}
    @include('pages.layout.footer')

    @stack('dt-js')



</body>

<script type="text/javascript" src="{{ url('/') }}/template/js/functions.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

      // Initialize the plugin
      $('#my_popup').popup({autoopen:true});

    });
</script>
    

</html>