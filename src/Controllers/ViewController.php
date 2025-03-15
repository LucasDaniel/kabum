<?php

namespace App\Controllers;

use App\Models\Database;
use App\Views\Index;
use App\Views\Home;

class ViewController extends Controller {

    public function index(){
        self::render(new Index());
    }

    public function home(){
        self::render(new Home());
    }

}
