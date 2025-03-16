<?php

namespace App\Validators;

use App\Models\User;
use App\Enums\TypesEnum;
use App\Exceptions\UserNotExistsException;

class UserTokenValidator extends Validator {

    public static function validator(int $id_user) {
        $quant = User::verifyUserById($id_user);
        if ($quant['quant'] < 1) UserNotExistsException::exception();
    }

    public static function validatorToken(string $token) {
        $fields = [
            'token' => [ $token ?? '', TypesEnum::STRING() ]
        ];
        self::validate($fields);
    }

}