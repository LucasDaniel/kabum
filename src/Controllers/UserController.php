<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Responses\UserResponse;
use App\Services\UserService;

class UserController extends Controller {
    
    public function store(Request $request) {
       
        $body = $request::body();

        $userCreate = UserService::create($body);

        return UserResponse::responseCreate($userCreate);
        
    }

    public function login(Request $request) {
       
        $body = $request::body();

        $user = UserService::login($body);

        return UserResponse::responseLogin($user);
        
    }

}
