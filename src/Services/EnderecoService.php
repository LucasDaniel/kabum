<?php

namespace App\Services;

use App\Validators\EnderecoValidator;
use App\Models\Endereco;
use App\Enums\ErrorsEnum;
use App\Exceptions\IncorrectLoginException;
use App\Exceptions\DeleteClientErrorException;

use PDOException;

class EnderecoService extends BaseService {
    
    public static function store(array $data) {
        $return = false;
        try {
            EnderecoValidator::validator($data);
            if ($data['id'] < 1) $return = Endereco::create($data);
            else $return = Endereco::update($data);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) die(explode('=',$e->errorInfo[2])[1]);
            die($e->getMessage());
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

    public static function getAll() {
        return Endereco::getAll();
    }

    public static function delete(array $data) {
        $return = false;
        try {
            $return = Endereco::delete($data);
            if (!$return) DeleteEnderecoErrorException::exception();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

}