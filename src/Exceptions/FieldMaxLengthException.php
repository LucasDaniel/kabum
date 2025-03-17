<?php

namespace App\Exceptions;

use App\Exceptions\BaseException;

class FieldMaxLengthException extends BaseException
{
    public static function exception(array $array)
    {
        $error = 'fieldMaxLength';
        self::baseExceptionValues($error,$array);
    }
}