<?php

namespace App\Controllers;

use App\Models\Database;
use App\Views\Index;

class ViewController {

    public function index(){
        $view = new Index();
        $view->render();
    }

}
