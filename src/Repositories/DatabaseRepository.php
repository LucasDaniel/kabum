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

    public static function createCliente() {
        print_r("executando createCliente<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        cliente (
                            id SERIAL PRIMARY KEY,
                            nome VARCHAR(255),
                            data_de_nascimento DATE,
                            cpf VARCHAR(255),
                            rg VARCHAR(255),
                            telefone VARCHAR(255)
                        );";
    }
}