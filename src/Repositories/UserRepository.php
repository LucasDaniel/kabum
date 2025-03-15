<?php

namespace App\Repositories;

class UserRepository {

    public static function rawInsertUser() {
        return "INSERT INTO 
                    user (nome,email,senha)
                VALUES 
                    (:nome,:email,:senha)";
    }

    public static function rawLoginUser() {
        return "SELECT 
                    nome, email
                FROM 
                    user
                WHERE 
                    email = :email AND
                    senha = :senha";
    }

    public static function rawVerifyUserById() {
        return "SELECT 
                    count(*) as quant
                FROM 
                    user
                WHERE 
                    id = :id";
    }

}
