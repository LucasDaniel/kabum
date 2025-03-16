<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class IncorrectLoginException extends BaseException
{
    public static function exception()
    {
        $error = 'incorrectLogin';
        self::baseException($error);
    }
}