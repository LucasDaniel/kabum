<?php

namespace App\Controllers;

use App\Models\Database;
use App\Views\Index;
use App\Views\Home;
use App\Views\Clientes;
use App\Views\Enderecos;
use App\Services\ClienteService;
use App\Services\EnderecoService;
use App\Enums\CitiesStatesEnum;

class ViewController extends Controller {

    public function index(){
        self::render(new Index());
    }

    public function home(){
        self::render(new Home());
    }

    public function clientes(){
        $clientes = ClienteService::getAll();
        self::render(new Clientes($clientes));
    }

    public function enderecos(){
        $enderecos = EnderecoService::getAll();
        self::render(new Enderecos($enderecos,CitiesStatesEnum::CITIES_STATES()));
    }

}
