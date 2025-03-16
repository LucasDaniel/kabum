<?php

namespace App\Services;

use App\Validators\ClienteValidator;
use App\Models\Cliente;
use App\Enums\ErrorsEnum;
use App\Exceptions\IncorrectLoginException;
use App\Exceptions\DeleteClientErrorException;

use PDOException;

class ClienteService extends BaseService {
    
    public static function create(array $data) {
        $return = false;
        try {
            ClienteValidator::validator($data);
            $return = Cliente::save($data);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) die(explode('=',$e->errorInfo[2])[1]);
            die($e->getMessage());
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

    public static function getAll() {
        return Cliente::getAll();
    }

    public static function delete(array $data) {
        $return = false;
        try {
            $return = Cliente::delete($data);
            if (!$return) DeleteClientErrorException::exception();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

}