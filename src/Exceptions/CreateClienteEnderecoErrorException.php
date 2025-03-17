<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class CreateClienteEnderecoErrorException extends BaseException
{
    public static function exception()
    {
        $error = 'createClienteEnderecoError';
        self::baseException($error);
    }
}