<?php

namespace App\Views;

class Clientes extends BaseView {

    public function render() {

        $vars = self::init('Clientes');

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/clientes.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footer.php');
        
    }

}