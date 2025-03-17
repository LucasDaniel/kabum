<?php

namespace App\Validators;

use App\Models\Endereco;
use App\Enums\TypesEnum;
use App\Enums\EnderecoRulesEnum;

class EnderecoValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'rua' => [ $data['rua'] ?? '', TypesEnum::STRING() ],
            'bairro' => [ $data['bairro'] ?? '', TypesEnum::STRING() ],
            'cidade' => [ $data['cidade'] ?? '', TypesEnum::STRING() ],
            'estado' => [ $data['estado'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);

        $fields = [
            'rua' => [ $data['rua'] ?? '', EnderecoRulesEnum::RUA_MIN(), EnderecoRulesEnum::RUA_MAX() ],
            'bairro' => [ $data['bairro'] ?? '', EnderecoRulesEnum::BAIRRO_MIN(), EnderecoRulesEnum::BAIRRO_MAX() ],
            'cidade' => [ $data['cidade'] ?? '', EnderecoRulesEnum::CIDADE_MIN(), EnderecoRulesEnum::CIDADE_MAX() ],
            'estado' => [ $data['estado'] ?? '', EnderecoRulesEnum::ESTADO_MIN(), EnderecoRulesEnum::ESTADO_MAX() ],
            'numero' => [ $data['numero'] ?? '', EnderecoRulesEnum::NUMERO_MIN(), EnderecoRulesEnum::NUMERO_MAX() ],
        ];

        self::length($fields);
    }

}