<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\ApostadorBilheteRepository;

class ApostadorBilhete extends Database {

    public static function save(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorBilheteRepository::rawInsertApostadorBilhete());
        $statement->bindParam(":id_apostador", $data['id_apostador'], PDO::PARAM_INT);
        $statement->bindParam(":id_sorteio", $data['id_sorteio'], PDO::PARAM_INT);
        $statement->bindParam(":numeros_escolhidos", $data['numeros_escolhidos'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId() > 0;
    }

    public static function verifySameNumbersToSorteio(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorBilheteRepository::rawSelectSameNumbersToSorteio());
        $statement->bindParam(":id_apostador", $data['id_apostador'], PDO::PARAM_INT);
        $statement->bindParam(":id_sorteio", $data['id_sorteio'], PDO::PARAM_INT);
        $statement->bindParam(":numeros_escolhidos", $data['numeros_escolhidos'], PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetchColumn() > 0;
    }

    public static function validateQuantTryMaxNumbers(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorBilheteRepository::rawSelectQuantTryMaxNumbers());
        $statement->bindParam(":id_apostador", $data['id_apostador'][0], PDO::PARAM_INT);
        $statement->bindParam(":id_sorteio", $data['id_sorteio'][0], PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchColumn();
    }

    public static function selectApostadoresBilhetesSorteio(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ApostadorBilheteRepository::rawSelectApostadoresBilhetesSorteio());
        $statement->bindParam(":id_sorteio", $data['id_sorteio'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    } 

}
