<?php

namespace App\Validators;

use App\Models\Cliente;
use App\Enums\TypesEnum;

class ClienteValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'nome' => [ $data['nome'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);
    }

}