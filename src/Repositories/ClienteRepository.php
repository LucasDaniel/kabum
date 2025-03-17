<?php

namespace App\Repositories;

class ClienteRepository {

    public static function rawInsertCliente() {
        return "INSERT INTO 
                    cliente (nome,data_nascimento,cpf,rg,telefone)
                VALUES 
                    (:nome,:data_nascimento,:cpf,:rg,:telefone)";
    }

    public static function rawUpdateCliente() {
        return "UPDATE 
                    cliente
                SET 
                    nome = :nome,
                    data_nascimento = :data_nascimento,
                    cpf = :cpf,
                    rg = :rg,
                    telefone = :telefone
                WHERE 
                    id = :id";
    }

    public static function rawGetAllCliente() {
        return "SELECT c.id,c.nome,c.data_nascimento,c.cpf,c.rg,c.telefone, GROUP_CONCAT(ce.id_endereco separator ', ') as id_enderecos
                    FROM kabum.cliente c
                        LEFT JOIN kabum.cliente_endereco ce ON ce.id_cliente = c.id
                    GROUP BY c.id,c.nome,c.data_nascimento,c.cpf,c.rg,c.telefone";
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
