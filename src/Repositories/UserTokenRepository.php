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
        return "UPDATE 
                    user_token
                SET 
                    token = :token,
                    expires_at = :expires_at
                WHERE 
                    id_user = :id_user";
    }

    public static function rawSelectTokenExists() {
        return "SELECT 
                    count(*)
                FROM 
                    user_token
                WHERE 
                    token = :token";
    }

}
