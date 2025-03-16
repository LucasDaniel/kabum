<?php

namespace App\Controllers;

use App\Models\Database;
use App\Views\Index;
use App\Views\Home;
use App\Views\Clientes;
use App\Services\ClienteService;

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

}
