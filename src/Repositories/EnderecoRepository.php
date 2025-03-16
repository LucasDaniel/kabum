<?php

namespace App\Repositories;

class EnderecoRepository {

    public static function rawInsertEndereco() {
        return "INSERT INTO 
                    endereco (rua,numero,complemento,bairro,cidade,estado)
                VALUES 
                    (:rua,:numero,:complemento,:bairro,:cidade,:estado)";
    }

    public static function rawUpdateEndereco() {
        return "UPDATE 
                    endereco
                SET 
                    rua = :rua,
                    numero = :numero,
                    complemento = :complemento,
                    bairro = :bairro,
                    cidade = :cidade,
                    estado = :estado
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
