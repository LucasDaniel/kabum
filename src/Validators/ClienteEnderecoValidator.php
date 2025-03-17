<?php

namespace App\Validators;

use App\Models\ClienteEndereco;
use App\Enums\TypesEnum;
use App\Exceptions\CreateClienteEnderecoErrorException;

class ClienteEnderecoValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'id_cliente' => [ $data['id_cliente'] ?? '', TypesEnum::INTEGER() ],
            'id_endereco' => [ $data['id_endereco'] ?? '', TypesEnum::INTEGER() ]
        ];

        self::validate($fields);
    }

    public static function exists(array $data) {
        $quant = ClienteEndereco::exists($data);
        return ($quant['quant'] < 1);
    }

}