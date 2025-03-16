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

        $clienteStore = ClienteService::store($body);

        return ClienteResponse::responseStore($clienteStore);
        
    }

    public function delete(Request $request) {
       
        $body = $request::body();

        $clienteDelete = ClienteService::delete($body);

        return ClienteResponse::responseDelete($clienteDelete);
        
    }

}
