<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\ClienteRepository;

class Cliente extends Database {

    public static function create(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawInsertCliente());
        $statement->bindParam(":nome", $data['nome'], PDO::PARAM_STR);
        $statement->bindParam(":data_nascimento", $data['data_nascimento'], PDO::PARAM_STR);
        $statement->bindParam(":cpf", $data['cpf'], PDO::PARAM_STR);
        $statement->bindParam(":rg", $data['rg'], PDO::PARAM_STR);
        $statement->bindParam(":telefone", $data['telefone'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId();
    }

    public static function update(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawUpdateCliente());
        $statement->bindParam(":id", $data['id'], PDO::PARAM_INT);
        $statement->bindParam(":nome", $data['nome'], PDO::PARAM_STR);
        $statement->bindParam(":data_nascimento", $data['data_nascimento'], PDO::PARAM_STR);
        $statement->bindParam(":cpf", $data['cpf'], PDO::PARAM_STR);
        $statement->bindParam(":rg", $data['rg'], PDO::PARAM_STR);
        $statement->bindParam(":telefone", $data['telefone'], PDO::PARAM_STR);
        $statement->execute();
        return $data['id'];
    }

    public static function getAll() {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawGetAllCliente());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteRepository::rawDeleteCliente());
        $statement->bindParam(":id", $data['id'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->rowCount();
    }

}
