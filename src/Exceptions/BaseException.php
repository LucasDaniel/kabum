<?php

namespace App\Exceptions;

use App\Dictionary\Dictionary;
use Exception;
 
class BaseException extends Exception
{
    protected static function baseException($error)
    {
        throw new Exception(Dictionary::dictionary()[$error]);
    }

    protected static function baseExceptionValues($error,$array)
    {
        $str = Dictionary::dictionary()[$error];
        foreach ($array as $field => $value) {
            $str = str_replace("@".$field,$value,$str);
        }
        throw new Exception($str);
    }
}