<?php

namespace App\Models;

use PDO;
use App\Utils\Util;
use App\Models\Database;
use App\Repositories\UserTokenRepository;

class UserToken extends Database {

    public static function save(int $id_user) {

        $token = Util::getNewToken($id_user);
        $date = Util::getNowMoreOneHour();

        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserTokenRepository::rawInsertUserToken());
        $statement->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        $statement->bindParam(":token", $token, PDO::PARAM_STR);
        $statement->bindParam(":expires_at", $date, PDO::PARAM_STR);
        $statement->execute();
        
        return $pdo->lastInsertId();
    }

    public static function update(int $id_user) {

        $token = Util::getNewToken($id_user);
        $date = Util::getNowMoreOneHour();

        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserTokenRepository::rawUpdateUserToken());
        $statement->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        $statement->bindParam(":token", $token, PDO::PARAM_STR);
        $statement->bindParam(":expires_at", $date, PDO::PARAM_STR);
        $statement->execute();
        
        return $token;
    }

}
