<?php

namespace App\Repositories;

class ApostadorRepository {

    public static function rawInsertApostador() {
        return "INSERT INTO 
                    apostador (nome)
                VALUES 
                    (:nome)";
    }

    public static function rawVerifyIdApostadorExists() {
        return "SELECT 
                    count(*)
                FROM 
                    apostador
                WHERE 
                    id = :id_apostador ";
    }

}
