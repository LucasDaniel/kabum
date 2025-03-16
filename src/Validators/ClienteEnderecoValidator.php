<?php

namespace App\Validators;

use App\Models\ClienteEndereco;
use App\Enums\TypesEnum;

class ClienteEnderecoValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'id_cliente' => [ $data['id_cliente'] ?? '', TypesEnum::INTEGER() ],
            'id_endereco' => [ $data['id_endereco'] ?? '', TypesEnum::INTEGER() ]
        ];

        self::validate($fields);
    }

}