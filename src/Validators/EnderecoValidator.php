<?php

namespace App\Validators;

use App\Models\Endereco;
use App\Enums\TypesEnum;

class EnderecoValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'rua' => [ $data['rua'] ?? '', TypesEnum::STRING() ],
            'bairro' => [ $data['bairro'] ?? '', TypesEnum::STRING() ],
            'cidade' => [ $data['cidade'] ?? '', TypesEnum::STRING() ],
            'estado' => [ $data['estado'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);
    }

}