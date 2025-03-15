<?php

namespace App\Models;

use PDO;
use App\Services\UserService;
use App\Services\UserTokenService;
use App\Repositories\DatabaseRepository;

class Database {
    protected static function getConnection() {

        $driver = $_ENV['DB_DRIVER'];
        $host   = $_ENV['DB_HOST'];
        $port   = $_ENV['DB_PORT'];
        $dbname = $_ENV['DB_NAME'];
        $user   = $_ENV['DB_USER'];
        $pass   = $_ENV['DB_PASS'];

        return new PDO("$driver:host=$host;port=$port;dbname=$dbname",$user,$pass);
    }

    public static function migrate() {
        $pdo = self::getConnection();
        $pdo->exec(DatabaseRepository::createUser());
        $pdo->exec(DatabaseRepository::createUserToken());
    }

    public static function seeder() {
        $id_user = UserService::create(['nome'=>'Admin','email'=>'a@a','senha'=>'a']);
        UserTokenService::create($id_user);
    }
}
