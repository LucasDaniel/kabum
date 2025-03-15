<?php

namespace App\Views;

class Home extends BaseView {

    public function render() {

        $vars = self::init('Home');

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/home.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footer.php');
        
    }

}