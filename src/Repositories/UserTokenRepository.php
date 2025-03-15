<?php

namespace App\Repositories;

class UserTokenRepository {

    public static function rawInsertUserToken() {
        return "INSERT INTO 
                    user_token (id_user,token,expires_at)
                VALUES 
                    (:id_user,:token,:expires_at)";
    }

    public static function rawUpdateUserToken() {
        return "SELECT 
                    nome, email
                FROM 
                    user_token
                WHERE 
                    email = :email AND
                    senha = :senha";
    }

}
