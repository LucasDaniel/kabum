<?php

namespace App\Repositories;

class DatabaseRepository {

    public static function createApostador() {
        print_r("executando createApostador<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        apostador (
                            id  SERIAL PRIMARY KEY,
                            nome VARCHAR(255) UNIQUE
                        );";
    }

    public static function createApostadorBilhete() {
        print_r("executando createApostadorBilhete<br><br>");
        return "CREATE TABLE IF NOT EXISTS 
                        apostador_bilhete (
                            id SERIAL PRIMARY KEY,
                            id_apostador INTEGER REFERENCES apostador,
                            id_sorteio INTEGER REFERENCES sorteio,
                            numeros_escolhidos VARCHAR(255)
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