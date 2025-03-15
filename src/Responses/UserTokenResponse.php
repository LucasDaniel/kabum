<?php

namespace App\Responses;

class UserTokenResponse extends BaseResponse {

    public static function responseCreate($arg) {
        return self::verifyDataAndReturn($arg,'Token criado com sucesso');
    }

    public static function responseUpdate($arg) {
        return self::verifyDataAndReturn($arg,'Token atualizado');
    }

}