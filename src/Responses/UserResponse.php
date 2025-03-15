<?php

namespace App\Responses;

class UserResponse extends BaseResponse {

    public static function responseCreate($arg) {
        return self::verifyDataAndReturn($arg,'Usuario criado com sucesso');
    }

    public static function responseLogin($arg) {
        return self::verifyDataAndReturn($arg,'Logado com sucesso');
    }

}