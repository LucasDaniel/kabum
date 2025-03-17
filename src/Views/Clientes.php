<?php

namespace App\Views;

class Clientes extends BaseView {

    protected array $clientes;
    protected array $enderecos;

    function __construct(array $clientes, array $enderecos) {
        $this->clientes = $clientes;
        $this->enderecos = $enderecos;
    }

    public function render() {

        $vars = self::init('Clientes');
        $clientes = $this->clientes;
        $enderecos = $this->enderecos;

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/clientes.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footer.php');
        
    }

}