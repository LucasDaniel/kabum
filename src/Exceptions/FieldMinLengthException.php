<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class FieldMinLengthException extends BaseException
{
    public static function exception(array $array)
    {
        $error = 'fieldMinLength';
        self::baseExceptionValues($error,$array);
    }
}