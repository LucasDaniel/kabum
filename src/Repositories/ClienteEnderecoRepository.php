<?php

namespace App\Repositories;

class ClienteEnderecoRepository {

    public static function rawInsertClienteEndereco() {
        return "INSERT INTO 
                    cliente_endereco (id_cliente,id_endereco)
                VALUES 
                    (:id_cliente,:id_endereco)";
    }

    public static function rawGetAllClienteEnderecoByClienteId() {
        return "SELECT 
                    *
                FROM 
                    cliente_endereco
                WHERE 
                    id_cliente = :id_cliente";
    }

    public static function rawDeleteClienteEndereco() {
        return "DELETE FROM 
                    cliente_endereco
                WHERE 
                    id_cliente = :id_cliente AND
                    id_endereco = :id_endereco";
    }
    
    public static function rawGetClienteEnderecoByIdClienteIdEndereco() {
        return "SELECT 
                    count(*) as quant
                FROM 
                    cliente_endereco
                WHERE 
                    id_cliente = :id_cliente AND
                    id_endereco = :id_endereco";
    }

}
