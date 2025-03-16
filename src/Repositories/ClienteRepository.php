<?php

namespace App\Repositories;

class ClienteRepository {

    public static function rawInsertCliente() {
        return "INSERT INTO 
                    cliente (nome,data_de_nascimento,cpf,rg,telefone)
                VALUES 
                    (:nome,:data_de_nascimento,:cpf,:rg,:telefone)";
    }

    public static function rawUpdateCliente() {
        return "UPDATE 
                    cliente
                SET 
                    nome = :nome,
                    data_de_nascimento = :data_de_nascimento,
                    cpf = :cpf,
                    rg = :rg,
                    telefone = :telefone
                WHERE 
                    id = :id";
    }

    public static function rawGetAllCliente() {
        return "SELECT 
                    *
                FROM 
                    cliente";
    }

    public static function rawVerifyClienteById() {
        return "SELECT 
                    count(*) as quant
                FROM 
                    cliente
                WHERE 
                    id = :id";
    }

    public static function rawDeleteCliente() {
        return "DELETE 
                FROM 
                    cliente 
                WHERE 
                    id = :id";
    }

    //

}
