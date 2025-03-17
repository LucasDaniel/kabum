<?php

namespace App\Models;

use PDO;
use App\Models\Database;
use App\Repositories\ClienteEnderecoRepository;

class ClienteEndereco extends Database {

    public static function create(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteEnderecoRepository::rawInsertClienteEndereco());
        $statement->bindParam(":id_cliente", $data['id_cliente'], PDO::PARAM_INT);
        $statement->bindParam(":id_endereco", $data['id_endereco'], PDO::PARAM_INT);
        $statement->execute();
        return $pdo->lastInsertId();
    }

    public static function exists(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteEnderecoRepository::rawGetClienteEnderecoByIdClienteIdEndereco());
        $statement->bindParam(":id_cliente", $data['id_cliente'], PDO::PARAM_INT);
        $statement->bindParam(":id_endereco", $data['id_endereco'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public static function getAllClienteEnderecoByClienteId() {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteEnderecoRepository::rawGetAllClienteEnderecoByClienteId());
        $statement->bindParam(":id_cliente", $data['id_cliente'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function delete(array $data) {
        $pdo = self::getConnection();
        $statement = $pdo->prepare(ClienteEnderecoRepository::rawDeleteClienteEndereco());
        $statement->bindParam(":id_cliente", $data['id_cliente'], PDO::PARAM_INT);
        $statement->bindParam(":id_endereco", $data['id_endereco'], PDO::PARAM_INT);
        $statement->execute();
        return $statement->rowCount();
    }

}
