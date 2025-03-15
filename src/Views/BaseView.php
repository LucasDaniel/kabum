<?php

namespace App\Views;

use App\Dictionary\Dictionary;

class BaseView {

    protected function dictionary($label,$value) {
        return Dictionary::dictionary($label)[$value];
    }
    
    protected function header($title) {

        $libraryAdminLte = 'src/Library/admin-lte/';
        $libraryCss = 'src/Library/css/';

        echo '
        <!DOCTYPE html>
        <html>
        <head>
            <title>'.$title.'</title>
            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- SweetAlert2 -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" type="text/css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'dist/css/adminlte.min.css?v=3.2.0">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="'.$libraryAdminLte.'plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- baseCss -->
            <link rel="stylesheet" href="'.$libraryCss.'base.css">
        ';
    }

    protected function customCss($css) {
        $libraryCss = 'src/Library/css/';
        echo '
        <!-- customCss -->
        <link rel="stylesheet" href="'.$libraryCss.''.$css.'.css">
        ';
    }

    protected function baseScripts() {

        $libraryAdminLte = 'src/Library/admin-lte/';
        $libraryJs = 'src/Library/js/';

        echo '
        <!-- jQuery -->
        <script src="'.$libraryAdminLte.'plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="'.$libraryAdminLte.'plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
        $.widget.bridge("uibutton", $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="'.$libraryAdminLte.'plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="'.$libraryAdminLte.'plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="'.$libraryAdminLte.'plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="'.$libraryAdminLte.'plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="'.$libraryAdminLte.'plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="'.$libraryAdminLte.'plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="'.$libraryAdminLte.'plugins/moment/moment.min.js"></script>
        <script src="'.$libraryAdminLte.'plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="'.$libraryAdminLte.'plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="'.$libraryAdminLte.'plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="'.$libraryAdminLte.'plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="'.$libraryAdminLte.'dist/js/adminlte.js?v=3.2.0"></script>
        <!-- SweetAlert2 -->
        <script src="'.$libraryAdminLte.'plugins/sweetalert2/sweetalert2.min.js"></script>
        <!-- base.js -->
        <script src="'.$libraryJs.'base.js"></script>
        ';
    }

    protected function customScript($script) {
        $libraryJs = 'src/Library/js/';
        echo '
        <!-- customScript -->
        <script src="'.$libraryJs.''.$script.'.js"></script>
        ';
    }

    protected function footer() {
        echo "</html>";
    }

}
