<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\UserResponse;
use App\Services\UserService;
use App\Services\UserTokenService;

class UserController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $userCreate = UserService::create($body);

        return UserResponse::responseCreate($userCreate);
        
    }

    public function login(Request $request) {
       
        $body = $request::body();

        $user = UserService::login($body);
        $userToken = UserTokenService::update($user['id']);
        $user['token'] = $userToken;
        unset($user['id']);

        return UserResponse::responseLogin($user);
        
    }

}
