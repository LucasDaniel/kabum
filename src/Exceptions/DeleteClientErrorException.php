<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class DeleteClientErrorException extends BaseException
{
    public static function exception()
    {
        $error = 'deleteClientError';
        self::baseException($error);
    }
}