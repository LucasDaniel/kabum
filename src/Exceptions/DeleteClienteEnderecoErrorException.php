<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class DeleteClienteEnderecoErrorException extends BaseException
{
    public static function exception()
    {
        $error = 'deleteClienteEnderecoError';
        self::baseException($error);
    }
}