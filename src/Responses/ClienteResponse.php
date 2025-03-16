<?php

namespace App\Responses;

class ClienteResponse extends BaseResponse {

    public static function responseCreate($arg) {
        return self::verifyDataAndReturn($arg,'Cliente criado com sucesso');
    }

    public static function responseDelete($arg) {
        return self::verifyDataAndReturn($arg,'Cliente deletado com sucesso');
    }

}