<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class UserNotExistsException extends BaseException
{
    public static function exception()
    {
        $error = 'userNotExists';
        self::baseException($error);
    }
}