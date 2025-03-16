<?php

namespace App\Responses;

class EnderecoResponse extends BaseResponse {

    public static function responseStore($arg) {
        return self::verifyDataAndReturn($arg,'Endereco salvo com sucesso');
    }

    public static function responseDelete($arg) {
        return self::verifyDataAndReturn($arg,'Endereco deletado com sucesso');
    }

}