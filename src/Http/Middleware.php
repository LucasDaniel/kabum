<?php

namespace App\Http;

class Middleware {

    public static function verifyToken() {
        session_start();
        //var_dump($_COOKIE);
    }

}