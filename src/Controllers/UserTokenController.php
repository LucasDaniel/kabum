<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\UserTokenResponse;
use App\Services\UserTokenService;

class UserTokenController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $userTokenCreate = UserTokenService::create($body);

        return UserTokenResponse::responseCreate($userTokenCreate);
        
    }

    public function verify(Request $request) {
       
        $body = $request::body();

        $userToken = UserTokenService::login($body);

        return UserTokenResponse::responseLogin($userToken);
        
    }

}
