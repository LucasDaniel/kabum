<?php

namespace App\Services;

use App\Validators\ApostadorBilheteValidator;
use App\Models\ApostadorBilhete;
use App\Services\SorteioService;

use PDOException;

class ApostadorBilheteService extends BaseService {

    public static function createRandomNumbers(array $data) {
        try {
            ApostadorBilheteValidator::validateTryRandomNumbers($data);
            $quantTryNumbers = $data['quantTryNumbers'];
            $quantNumbers = $data['quantNumbers'];
            while($quantTryNumbers > 0) {
                $data['numeros_escolhidos'] = SorteioService::generateNumbers($quantNumbers);
                $returnValidatorSameNumbers = ApostadorBilheteValidator::returnValidatorSameNumbers($data);
                if (!$returnValidatorSameNumbers) {
                    ApostadorBilhete::save($data);
                    $quantTryNumbers--;
                }
            }
        } catch (PDOException $e) {
            if ($e->errorInfo[0] == ErrorsEnum::DUPLICATE_ID()) return ['error' => explode('=',$e->errorInfo[2])[1]];
            return ['error' => $e->getMessage()];
        } catch (\Exception $e) {
            return ['error' => $e->getMessage()];
        }
        return 'Try numbers: '.$data['quantTryNumbers'].' - Quantity Numbers: '.$data['quantNumbers'];
    }

}