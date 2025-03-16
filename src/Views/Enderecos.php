<?php

namespace App\Views;

class Enderecos extends BaseView {

    protected array $enderecos;

    function __construct(array $enderecos) {
        $this->enderecos = $enderecos;
    }

    public function render() {

        $vars = self::init('Endereços');
        $vars['css'] = 'enderecos';
        $vars['js'] = 'enderecos';
        $enderecos = $this->enderecos;

        include('Pages/Components/header.php');

        include('Pages/Components/customcss.php');

        include('Pages/enderecos.php');

        include('Pages/Components/basescripts.php');

        include('Pages/Components/customjs.php');

        include('Pages/Components/footer.php');
        
    }

}