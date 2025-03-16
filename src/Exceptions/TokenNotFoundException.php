<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class TokenNotFoundException extends BaseException
{
    public static function exception()
    {
        $error = 'tokenNotFound';
        self::baseException($error);
    }
}