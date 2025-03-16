<?php

namespace App\Http;

use App\Exceptions\TokenNotFoundException;

class Middleware {

    public static function verifyToken() {
        session_start();
        if(!isset($_COOKIE['token'])) header( "Location: ".$_ENV['APP_URL'].'/index' );
    }

}