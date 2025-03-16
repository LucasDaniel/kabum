<?php

namespace App\Responses;

class ClienteEnderecoResponse extends BaseResponse {

    public static function responseStore($arg) {
        return self::verifyDataAndReturn($arg,'Vinculação de endereço feita com sucesso');
    }

    public static function responseDelete($arg) {
        return self::verifyDataAndReturn($arg,'Vinculação de endereço deletada com sucesso');
    }

}