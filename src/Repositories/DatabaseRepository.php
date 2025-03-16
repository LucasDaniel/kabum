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
                            data_nascimento DATE,
                            cpf VARCHAR(255),
                            rg VARCHAR(255),
                            telefone VARCHAR(255)
                        );";
    }

    public static function createEndereco() {
        print_r("executando createEndereco<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        endereco (
                            id SERIAL PRIMARY KEY,
                            rua VARCHAR(255),
                            numero VARCHAR(8),
                            complemento VARCHAR(255),
                            bairro VARCHAR(255),
                            cidade VARCHAR(255),
                            estado VARCHAR(2)
                        );";
    }

    public static function createClienteEndereco() {
        print_r("executando createClienteEndereco<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        cliente_endereco (
                            id SERIAL PRIMARY KEY,
                            id_cliente INTEGER REFERENCES cliente,
                            id_endereco INTEGER REFERENCES endereco
                        );";
    }
}