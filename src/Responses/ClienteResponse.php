<?php

namespace App\Responses;

class ClienteResponse extends BaseResponse {

    public static function responseStore($arg) {
        return self::verifyDataAndReturn($arg,'Cliente salvo com sucesso');
    }

    public static function responseDelete($arg) {
        return self::verifyDataAndReturn($arg,'Cliente deletado com sucesso');
    }

}