<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\ClienteRepository;

class Cliente extends Database {

    public static function save(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawInsertCliente());
        $statement->bindParam(":nome", $data['nome'], PDO::PARAM_STR);
        $statement->bindParam(":data_de_nascimento", $data['data_de_nascimento'], PDO::PARAM_STR);
        $statement->bindParam(":cpf", $data['cpf'], PDO::PARAM_STR);
        $statement->bindParam(":rg", $data['rg'], PDO::PARAM_STR);
        $statement->bindParam(":telefone", $data['telefone'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId();
    }

    public static function getAll() {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawGetAllCliente());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

}
