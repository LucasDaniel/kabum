<?php

namespace App\Repositories;

class ClienteRepository {

    public static function rawInsertCliente() {
        return "INSERT INTO 
                    cliente (nome,data_de_nascimento,cpf,rg,telefone)
                VALUES 
                    (:nome,:data_de_nascimento,:cpf,:rg,:telefone)";
    }

    public static function rawVerifyClienteById() {
        return "SELECT 
                    count(*) as quant
                FROM 
                    cliente
                WHERE 
                    id = :id";
    }

}
