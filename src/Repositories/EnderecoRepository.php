<?php

namespace App\Repositories;

class EnderecoRepository {

    public static function rawInsertEndereco() {
        return "INSERT INTO 
                    endereco (rua)
                VALUES 
                    (:rua)";
    }

    public static function rawUpdateEndereco() {
        return "UPDATE 
                    endereco
                SET 
                    rua = :rua
                WHERE 
                    id = :id";
    }

    public static function rawGetAllEndereco() {
        return "SELECT 
                    *
                FROM 
                    endereco";
    }

    public static function rawVerifyEnderecoById() {
        return "SELECT 
                    count(*) as quant
                FROM 
                    endereco
                WHERE 
                    id = :id";
    }

    public static function rawDeleteEndereco() {
        return "DELETE 
                FROM 
                    endereco 
                WHERE 
                    id = :id";
    }

    //

}
