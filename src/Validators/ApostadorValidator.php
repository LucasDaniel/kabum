<?php

namespace App\Validators;

use App\Validators\Validator;
use App\Models\Apostador;
use App\Enums\TypesEnum;

class ApostadorValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'nome' => [ $data['nome'] ?? '', TypesEnum::STRING() ],
        ];

        self::validate($fields);
    }

    public static function verifyIdApostador(array $data) {
        Apostador::verifyIdApostador($data);
    }

}