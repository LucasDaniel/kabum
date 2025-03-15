<?php

namespace App\Views;

use App\Dictionary\Dictionary;

class BaseView {

    protected function dictionary($label,$value) {
        return Dictionary::dictionary($label)[$value];
    }
    
    protected function header($title) {

        $library = 'src/Library/admin-lte/';

        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>'.$title.'</title>
            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="'.$library.'plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="'.$library.'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="'.$library.'plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="'.$library.'plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="'.$library.'dist/css/adminlte.min.css?v=3.2.0">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="'.$library.'plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        </head>
        ';
    }

    protected function baseScripts() {

        $library = 'src/Library/admin-lte/';

        echo '
        <!-- jQuery -->
        <script src="'.$library.'plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="'.$library.'plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge("uibutton", $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="'.$library.'plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="'.$library.'plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="'.$library.'plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="'.$library.'plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="'.$library.'plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="'.$library.'plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="'.$library.'plugins/moment/moment.min.js"></script>
        <script src="'.$library.'plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="'.$library.'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="'.$library.'plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="'.$library.'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="'.$library.'dist/js/adminlte.js?v=3.2.0"></script>
        ';
    }

    protected function footer() {
        echo "</html>";
    }

}
