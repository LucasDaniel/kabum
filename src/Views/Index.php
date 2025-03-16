<?php

namespace App\Views;

class Index extends BaseView {

    public function render() {

        $vars = self::init('Index');

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/index.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footerindex.php');
        
    }

}