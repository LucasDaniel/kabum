<?php

namespace App\Services;

use App\Models\UserToken;
use App\Enums\ErrorsEnum;
use App\Validators\UserTokenValidator;

use PDOException;

class UserTokenService extends BaseService {
    
    public static function create(int $id_user) {
        $return = false;
        try {
            UserTokenValidator::validator($id_user);
            $return = UserToken::save($id_user);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) return ['error' => explode('=',$e->errorInfo[2])[1]];
            return ['error' => $e->getMessage()];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

    public static function update(int $id_user) {
        $return = false;
        try {
            UserTokenValidator::validator($id_user);
            $return = UserToken::update($id_user);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

    public static function verifyTokenExists(string $token) {
        $return = false;
        try {
            UserTokenValidator::validatorToken($token);
            $return = UserToken::verifyTokenExists($token);
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

}