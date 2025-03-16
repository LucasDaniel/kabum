<?php

namespace App\Views;

class Enderecos extends BaseView {

    protected array $enderecos;
    protected array $cidade_estados;

    function __construct(array $enderecos, array $cidade_estados) {
        $this->enderecos = $enderecos;
        $this->cidade_estados = $cidade_estados;
    }

    public function render() {

        $vars = self::init('Endereços');
        $vars['css'] = 'enderecos';
        $vars['js'] = 'enderecos';
        $enderecos = $this->enderecos;
        $cidade_estados = $this->cidade_estados;

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/enderecos.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footer.php');
        
    }

}