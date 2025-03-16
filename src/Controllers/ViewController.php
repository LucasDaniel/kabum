<?php

namespace App\Controllers;

use App\Models\Database;
use App\Views\Index;
use App\Views\Home;
use App\Views\Clientes;

class ViewController extends Controller {

    public function index(){
        self::render(new Index());
    }

    public function home(){
        self::render(new Home());
    }

    public function clientes(){
        self::render(new Clientes());
    }

}
