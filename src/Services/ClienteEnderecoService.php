<?php

namespace App\Services;

use App\Validators\ClienteEnderecoValidator;
use App\Models\ClienteEndereco;
use App\Enums\ErrorsEnum;
use App\Exceptions\DeleteClienteEnderecoErrorException;
use App\Exceptions\CreateClienteEnderecoErrorException;

use PDOException;

class ClienteEnderecoService extends BaseService {
    
    public static function store(array $data) {
        $return = false;
        try {
            $id_enderecos = $data['id_enderecos'];
            foreach ($id_enderecos as $id => $id_endereco) {
                if(ClienteEnderecoValidator::exists(['id_endereco' => $id_endereco, 'id_cliente' => $data['id_cliente']])) {
                    $return = ClienteEndereco::create(['id_endereco' => $id_endereco,
                                                       'id_cliente' => $data['id_cliente']]);
                    if (!$return) CreateClienteEnderecoErrorException::exception();
                }
            }
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) die(explode('=',$e->errorInfo[2])[1]);
            die($e->getMessage());
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

    public static function getAllClienteEnderecoByClienteId() {
        $return = false;
        try {
            $return = ClienteEndereco::getAllClienteEnderecoByClienteId($data);
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

    public static function delete(array $data) {
        $return = false;
        try {
            $return = ClienteEndereco::delete($data);
            if (!$return) DeleteClienteEnderecoErrorException::exception();
        } catch (\Exception $e) {
            die($e->getMessage());
        }
        return $return;
    }

}