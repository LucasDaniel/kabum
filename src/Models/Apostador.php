<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\ApostadorRepository;

class Apostador extends Database {

    public static function save(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorRepository::rawInsertApostador());
        $statement->bindParam(":nome", $data['nome'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId() > 0;
    }

    public static function verifyIdApostadorExists(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorRepository::rawVerifyIdApostadorExists());
        $statement->bindParam(":id_apostador", $data['id_apostador'][0], PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchColumn() > 0;
    }

}
