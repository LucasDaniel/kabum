<?php

namespace App\Responses;

use App\Http\Response;

class BaseResponse {

    protected static function verifyDataAndReturn($arg,$msg) {
        if (isset($arg['error']) || !$arg) {
            return self::returnJsonError($arg);
        }
        return self::returnJsonSuccess($arg,$msg);
    }

    private static function returnJsonError($arg, int $code = 400) {
        return Response::json([
            'error' => false,
            'success' => true,
            'data' => $arg['error'] ? $arg['error'] : $arg
        ],$code);
    }

    private static function returnJsonSuccess($arg,$msg, int $code = 200) {
        return Response::json([
            'error' => false,
            'success' => true,
            'data' => $arg,
            'message' => $msg
        ],$code);
    }

}