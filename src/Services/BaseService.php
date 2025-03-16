<?php

namespace App\Services;

class BaseService {

    public static function error($e) {
        die($e);
    }

}
