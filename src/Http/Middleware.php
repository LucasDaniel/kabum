<?php

namespace App\Http;

use App\Exceptions\TokenNotFoundException;
use App\Services\UserTokenService;

class Middleware {

    public static function verifyToken() {
        session_start();
        if(!isset($_COOKIE['token'])) header( "Location: ".$_ENV['APP_URL'].'/index' );
        $tokensExists = UserTokenService::verifyTokenExists($_COOKIE['token']);
        if (!$tokensExists) header( "Location: ".$_ENV['APP_URL'].'/index' );
    }

}