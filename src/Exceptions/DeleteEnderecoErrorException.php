<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class DeleteEnderecoErrorException extends BaseException
{
    public static function exception()
    {
        $error = 'deleteEnderecoError';
        self::baseException($error);
    }
}