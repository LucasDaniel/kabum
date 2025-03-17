<?php

namespace App\Repositories;

use App\Enums\ClienteLengthEnum;
use App\Enums\EnderecoLengthEnum;

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
                            nome VARCHAR(".ClienteRulesEnum::NOME_MAX()."),
                            data_nascimento DATE,
                            cpf VARCHAR(".ClienteRulesEnum::CPF_MAX()."),
                            rg VARCHAR(".ClienteRulesEnum::RG_MAX()."),
                            telefone VARCHAR(".ClienteRulesEnum::TELEFONE_MAX().")
                        );";
    }

    public static function createEndereco() {
        print_r("executando createEndereco<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        endereco (
                            id SERIAL PRIMARY KEY,
                            rua VARCHAR(".EnderecoRulesEnum::RUA_MAX()."),
                            numero VARCHAR(".EnderecoRulesEnum::NUMERO_MAX()."),
                            complemento VARCHAR(255),
                            bairro VARCHAR(".EnderecoRulesEnum::BAIRRO_MAX()."),
                            cidade VARCHAR(".EnderecoRulesEnum::CIDADE_MAX()."),
                            estado VARCHAR(".EnderecoRulesEnum::ESTADO_MAX().")
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