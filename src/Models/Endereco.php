<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\EnderecoRepository;

class Endereco extends Database {

    public static function create(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(EnderecoRepository::rawInsertEndereco());
        $statement->bindParam(":rua", $data['rua'], PDO::PARAM_STR);
        $statement->execute();
        return $pdo->lastInsertId();
    }

    public static function update(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(EnderecoRepository::rawUpdateEndereco());
        $statement->bindParam(":id", $data['id'], PDO::PARAM_INT);
        $statement->bindParam(":rua", $data['rua'], PDO::PARAM_STR);
        $statement->execute();
        return $statement->rowCount();
    }

    public static function getAll() {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(EnderecoRepository::rawGetAllEndereco());
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(EnderecoRepository::rawDeleteEndereco());
        $statement->bindParam(":id", $data['id'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->rowCount();
    }

}
