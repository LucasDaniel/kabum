<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\ClienteEnderecoResponse;
use App\Services\ClienteEnderecoService;
use App\Services\ClienteEnderecoTokenService;

class ClienteEnderecoController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $clienteStore = ClienteEnderecoService::store($body);

        return ClienteEnderecoResponse::responseStore($clienteStore);
        
    }

    public function delete(Request $request) {
       
        $body = $request::body();

        $clienteDelete = ClienteEnderecoService::delete($body);

        return ClienteEnderecoResponse::responseDelete($clienteDelete);
        
    }

}
