<?php

namespace App\Repositories;

class DatabaseRepository {

    public static function createUser() {
        print_r("executando createUser<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        user (
                            id  SERIAL PRIMARY KEY,
                            nome VARCHAR(255),
                            email VARCHAR(255) UNIQUE,
                            senha VARCHAR(255)
                        );";
    }

    public static function createUserToken() {
        print_r("executando createUserToken<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        user_token (
                            id SERIAL PRIMARY KEY,
                            id_user INTEGER REFERENCES user,
                            token VARCHAR(255),
                            expires_at DATETIME
                        );";
    }

    public static function createNumeroSorteado() {
        print_r("executando createNumeroSorteado<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        sorteio (
                            id SERIAL PRIMARY KEY,
                            numeros_sorteados VARCHAR(255)
                        );";
    }
}