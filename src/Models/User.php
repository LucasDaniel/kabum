<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\UserRepository;

class User extends Database {

    public static function save(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserRepository::rawInsertUser());
        $statement->bindParam(":nome", $data['nome'], PDO::PARAM_STR);
        $statement->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statement->bindParam(":senha", $data['senha'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId() > 0;
    }

    public static function login(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(UserRepository::rawLoginUser());
        $statement->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statement->bindParam(":senha", $data['senha'], PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

}
