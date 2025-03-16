<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\EnderecoResponse;
use App\Services\EnderecoService;
use App\Services\EnderecoTokenService;

class EnderecoController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $enderecoStore = EnderecoService::store($body);

        return EnderecoResponse::responseStore($enderecoStore);
        
    }

    public function delete(Request $request) {
       
        $body = $request::body();

        $enderecoDelete = EnderecoService::delete($body);

        return EnderecoResponse::responseDelete($enderecoDelete);
        
    }

}
