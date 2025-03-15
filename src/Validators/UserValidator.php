<?php

namespace App\Validators;

use App\Validators\Validator;
use App\Models\User;
use App\Enums\TypesEnum;

class UserValidator extends Validator {

    public static function validator(array $data) {

        $fields = [
            'nome' => [ $data['nome'] ?? '', TypesEnum::STRING() ],
            'email' => [ $data['email'] ?? '', TypesEnum::STRING() ],
            'senha' => [ $data['senha'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);
    }

    public static function login($data) {

        $fields = [
            'email' => [ $data['email'] ?? '', TypesEnum::STRING() ],
            'senha' => [ $data['senha'] ?? '', TypesEnum::STRING() ]
        ];

        self::validate($fields);
    }

    public static function verifyIdUser(array $data) {
        User::verifyIdUser($data);
    }

}