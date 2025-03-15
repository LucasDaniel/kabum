<?php

namespace App\Models;

use PDO;
use App\Models\Apostador;
use App\Repositories\DatabaseRepository;

class Database {
    protected static function getConnection() {

        $host   = $_ENV['DB_HOST'];
        $port   = $_ENV['DB_PORT'];
        $dbname = $_ENV['DB_NAME'];
        $user   = $_ENV['DB_USER'];
        $pass   = $_ENV['DB_PASS'];

        return new PDO("pgsql:host=$host;port=$port;dbname=$dbname",$user,$pass);
    }

    public static function migrate() {
        $pdo = self::getConnection();
        $pdo->exec(DatabaseRepository::createApostador());
        $pdo->exec(DatabaseRepository::createNumeroSorteado());
        $pdo->exec(DatabaseRepository::createApostadorBilhete());
    }

    public static function seeder() {
        Apostador::save(['nome'=>'Lucas']);
        Apostador::save(['nome'=>'Daniel']);
        Apostador::save(['nome'=>'Beltrame']);
        Apostador::save(['nome'=>'Lima']);
        Apostador::save(['nome'=>'Rodrigues']);
    }
}
