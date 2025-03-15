<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Services\ApostadorService;

class ApostadorController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $apostadorCreate = ApostadorService::create($body);

        return self::verifyDataAndReturn($apostadorCreate);
        
    }

}
