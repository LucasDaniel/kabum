<?php

namespace App\Controllers;

use App\Http\Request;
use App\Controllers\Controller;
use App\Services\ApostadorBilheteService;

class ApostadorBilheteController extends Controller {

    public function createRandomNumbers(Request $request) {

        $body = $request::body();

        $apostadorBilheteCreate = ApostadorBilheteService::createRandomNumbers($body);

        return self::verifyDataAndReturn($apostadorBilheteCreate);

    }

}
