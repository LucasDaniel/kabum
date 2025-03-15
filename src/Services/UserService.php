<?php

namespace App\Services;

use App\Validators\UserValidator;
use App\Models\User;
use App\Enums\ErrorsEnum;

use PDOException;

class UserService extends BaseService {
    
    public static function create(array $data) {
        $return = false;
        try {
            UserValidator::validator($data);
            $return = User::save($data);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) return ['error' => explode('=',$e->errorInfo[2])[1]];
            return ['error' => $e->getMessage()];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

    public static function login($data) {
        $return = false;
        try {
            UserValidator::login($data);
            $return = User::login($data);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

}