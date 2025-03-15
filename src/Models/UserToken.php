<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\UserTokenRepository;

class UserToken extends Database {

    public static function save(int $id_user) {

        $token = md5(strtotime(date("Y-m-d H:i:s"))+rand(999,999999)+$id_user);
        $date = date("Y-m-d H:i:s",(strtotime(date("Y-m-d H:i:s"))-10800));

        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserTokenRepository::rawInsertUserToken());
        $statement->bindParam(":id_user", $id_user, PDO::PARAM_INT);
        $statement->bindParam(":token", $token, PDO::PARAM_STR);
        $statement->bindParam(":expires_at", $date, PDO::PARAM_STR);
        $statement->execute();
        
        return $pdo->lastInsertId();
    }

    public static function update(array $data) {
        $date = date("Y-m-d H:i:s",(strtotime(date("Y-m-d H:i:s"))-10800));

        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserTokenRepository::rawUpdateUserToken());
        $statement->bindParam(":token", md5(rand(1,9999)), PDO::PARAM_STR);
        $statement->bindParam(":expires_at", $date, PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

}
