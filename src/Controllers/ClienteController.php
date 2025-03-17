<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\ClienteResponse;
use App\Services\ClienteService;
use App\Services\ClienteEnderecoService;

class ClienteController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $clienteStore = ClienteService::store($body);
        ClienteEnderecoService::store(['id_enderecos' => $body['enderecos'],
                                       'id_cliente' => $clienteStore]);

        return ClienteResponse::responseStore($clienteStore);
        
    }

    public function delete(Request $request) {
       
        $body = $request::body();

        ClienteEnderecoService::deleteAllClienteEnderecoByIdCliente($body);
        $clienteDelete = ClienteService::delete($body);

        return ClienteResponse::responseDelete($clienteDelete);
        
    }

}
