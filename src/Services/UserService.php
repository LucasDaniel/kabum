<?php

namespace App\Services;

use App\Validators\UserValidator;
use App\Models\User;
use App\Enums\ErrorsEnum;
use App\Exceptions\IncorrectLoginException;

use PDOException;

class UserService extends BaseService {
    
    public static function create(array $data) {
        $return = false;
        try {
            UserValidator::validator($data);
            $return = User::save($data);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) die(explode('=',$e->errorInfo[2])[1]);
            die($e->getMessage());
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

    public static function login($data) {
        $return = false;
        try {
            UserValidator::login($data);
            $return = User::login($data);
            if (!$return) IncorrectLoginException::exception();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

}