const elixir = require('laravel-elixir');
elixir.config.sourcemaps = false;

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss')
       .webpack('app.js');

    /** Public & User **/

    // CSS - Stylesheet
    mix.styles([
        // 'css/plugins/datetimepicker/bootstrap-combined.min.css',
        'css/bootstrap.min.css',
        'css/bootstrap-ed.css',
        'css/dataTables.bootstrap.min.css',
        'css/responsive.dataTables.min.css',
        'css/ui.totop.css',
        'css/component.css',
        'css/plugins/datapicker/datepicker3.css',

        // 'css/jquery-ui.css',
        // 'css/plugins/datetimepicker/bootstrap-datetimepicker.min.css',        

        'css/plugins/datetimepicker/jquery.datetimepicker.css', 

        // Finalizing pake custom aja
        //'css/custom.css'
    ],'public/template/css/all.css','public/template/');

    // CSS - Fonts

    // mix.styles([
    //     'Lato/latofonts.css',
    //     'Lato/latostyle.css'
    // ],'public/template/css/fonts.css','public/template/fonts/');

    // SCRIPTS
    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'jquery.dataTables.min.js',
        'dataTables.bootstrap.min.js',
        'dataTables.responsive.min.js',
        'datetime.js',
        'date-de.js',
        'jquery.ui.totop.js',
        'easing.js',        

        'plugins/datapicker/bootstrap-datepicker.js',
        // 'jquery-ui.js',
        'plugins/datetimepicker/jquery.datetimepicker.full.js',

    ],'public/template/js/compressed.js','public/template/js');

    /** Admin **/

    // CSS - Stylesheet
    mix.styles([
        'font-awesome/css/font-awesome.css',
        'css/bootstrap.min.css',
        'css/plugins/toastr/toastr.min.css',
        'js/plugins/gritter/jquery.gritter.css',
        'css/animate.css',
        'css/style.css',
        'css/ui.totop.css',
        'css/jquery.filer.css',
        'css/plugins/jqplot/jquery.jqplot.min.css',
        'css/plugins/datapicker/datepicker3.css',

        // 'css/plugins/dataTables2/jquery.dataTables.min.css',
        'css/plugins/dataTables2/buttons.dataTables.min.css',

        'css/plugins/datetimepicker/jquery.datetimepicker.css',
        'css/jquery.fileuploader.css',

        // Finalizing pake custom aja
        //'css/custom.css'
    ],'public/template-admin/css/all.css','public/template-admin/');

    // SCRIPTS
    mix.scripts([
        'js/jquery-2.1.1.js',
        'js/bootstrap.min.js',        
        'js/plugins/metisMenu/jquery.metisMenu.js',
        'js/plugins/slimscroll/jquery.slimscroll.min.js',
        'js/plugins/flot/jquery.flot.js',
        'js/plugins/flot/jquery.flot.tooltip.min.js',
        'js/plugins/flot/jquery.flot.spline.js',
        'js/plugins/flot/jquery.flot.resize.js',
        'js/plugins/flot/jquery.flot.pie.js',
        'js/plugins/peity/jquery.peity.min.js',
        'js/demo/peity-demo.js',
        'js/inspinia.js',
        'js/plugins/pace/pace.min.js',
        'js/plugins/jquery-ui/jquery-ui.min.js',
        'js/plugins/gritter/jquery.gritter.min.js',
        'js/plugins/sparkline/jquery.sparkline.min.js',
        'js/demo/sparkline-demo.js',
        'js/plugins/chartJs/Chart.min.js',
        'js/plugins/toastr/toastr.min.js',

        'js/plugins/datapicker/bootstrap-datepicker.js',
        'js/plugins/daterangepicker/daterangepicker.js',
        'js/plugins/fullcalendar/moment.min.js',
        'js/plugins/chosen/chosen.jquery.js',
        'js/plugins/jsKnob/jquery.knob.js',
        
        
        'js/jquery.ui.totop.js',
        'js/easing.js',
        'js/jquery.filer.min.js',
        'js/jquery.filer.custom.js',
        'js/plugins/jqplot/jquery.jqplot.min.js',
        'js/plugins/jqplot/jqplot.barRenderer.js',
        'js/plugins/jqplot/jqplot.categoryAxisRenderer.js',
        'js/plugins/jqplot/jqplot.pointLabels.js',
        'js/plugins/jqplot/jqplot.canvasAxisLabelRenderer.js',
        'js/plugins/jqplot/jqplot.canvasTextRenderer.js',
        'js/plugins/jqplot/jqplot.canvasAxisTickRenderer.js',

        'js/plugins/datapicker/bootstrap-datepicker.js',


        'js/plugins/dataTables2/jquery.dataTables.min.js',
        'js/plugins/dataTables2/dataTables.buttons.min.js',
        'js/plugins/dataTables2/buttons.flash.min.js',
        'js/plugins/dataTables2/jszip.min.js',
        'js/plugins/dataTables2/pdfmake.min.js',
        'js/plugins/dataTables2/vfs_fonts.js',
        'js/plugins/dataTables2/buttons.html5.min.js',
        'js/plugins/dataTables2/buttons.print.min.js',
        //'js/plugins/dataTables2/range_dates.js',
        

        // 'js/plugins/dataTables/jquery.dataTables.js',
        'js/plugins/dataTables/dataTables.bootstrap.js',
        'js/plugins/dataTables/dataTables.responsive.js',
        'js/plugins/dataTables/dataTables.tableTools.min.js',

        'js/plugins/datetimepicker/jquery.datetimepicker.full.js',
        'js/jquery.fileuploader.min.js'

    ],'public/template-admin/js/compressed.js','public/template-admin/');

});