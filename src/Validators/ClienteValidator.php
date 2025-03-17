<?php

namespace App\Validators;

use App\Models\Cliente;
use App\Enums\TypesEnum;
use App\Enums\ClienteRulesEnum;

class ClienteValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'nome' => [ $data['nome'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);

        $fields = [
            'nome' => [ $data['nome'] ?? '', ClienteRulesEnum::NOME_MIN(), ClienteRulesEnum::NOME_MAX() ],
            'data_nascimento' => [ $data['data_nascimento'] ?? '', ClienteRulesEnum::DATA_NASCIMENTO_MIN(), ClienteRulesEnum::DATA_NASCIMENTO_MAX() ],
            'telefone' => [ $data['telefone'] ?? '', ClienteRulesEnum::TELEFONE_MIN(), ClienteRulesEnum::TELEFONE_MAX() ],
            'cpf' => [ $data['cpf'] ?? '', ClienteRulesEnum::CPF_MIN(), ClienteRulesEnum::CPF_MAX() ],
            'rg' => [ $data['rg'] ?? '', ClienteRulesEnum::RG_MIN(), ClienteRulesEnum::RG_MAX() ],
        ];

        self::length($fields);
    }

}