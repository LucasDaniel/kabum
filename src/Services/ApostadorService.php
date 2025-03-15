<?php

namespace App\Services;

use App\Validators\ApostadorValidator;
use App\Models\Apostador;
use App\Enums\ErrorsEnum;

use PDOException;

class ApostadorService extends BaseService {
    
    public static function create(array $data) {
        $return = false;
        try {
            ApostadorValidator::validator($data);
            $return = Apostador::save($data);
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) return ['error' => explode('=',$e->errorInfo[2])[1]];
            return ['error' => $e->getMessage()];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return $return;
    }

}