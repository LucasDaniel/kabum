<?php

namespace App\Validators;

use App\Models\User;
use App\Exceptions\UserNotExistsException;

class UserTokenValidator extends Validator {

    public static function validator(int $id_user) {
        $quant = User::verifyUserById($id_user);
        if ($quant['quant'] < 1) UserNotExistsException::exception();
    }

}