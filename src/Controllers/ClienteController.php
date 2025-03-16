<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\ClienteResponse;
use App\Services\ClienteService;
use App\Services\ClienteTokenService;

class ClienteController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $clienteCreate = ClienteService::create($body);

        return ClienteResponse::responseCreate($clienteCreate);
        
    }

}
