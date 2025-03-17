<?php

namespace App\Enums;

class EnderecoRulesEnum {

    public static function NUMERO_MIN(): int {
        return 1;
    }

    public static function NUMERO_MAX(): int {
        return 8;
    }

    public static function ESTADO_MIM(): int {
        return 2;
    }

    public static function ESTADO_MAX(): int {
        return 2;
    }

    public static function BAIRRO_MIN(): int {
        return 1;
    }

    public static function BAIRRO_MAX(): int {
        return 255;
    }

    public static function CIDADE_MIN(): int {
        return 1;
    }

    public static function CIDADE_MAX(): int {
        return 255;
    }

    public static function RUA_MIN(): int {
        return 1;
    }

    public static function RUA_MAX(): int {
        return 255;
    }
    
}
