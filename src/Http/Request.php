<?php

namespace App\Http;

class Request {

    public static function method() {
        return $_SERVER["REQUEST_METHOD"];
    }

    public static function body() {
        if (self::method() == 'GET') return $_GET;
        return $_POST;
    }

}
