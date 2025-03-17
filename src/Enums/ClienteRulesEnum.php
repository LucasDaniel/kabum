<?php

namespace App\Enums;

class ClienteRulesEnum {

    public static function NOME_MIN(): int {
        return 3;
    }

    public static function NOME_MAX(): int {
        return 255;
    }

    public static function DATA_NASCIMENTO_MIN(): int {
        return 10;
    }

    public static function DATA_NASCIMENTO_MAX(): int {
        return 10;
    }

    public static function TELEFONE_MIN(): int {
        return 11;
    }

    public static function TELEFONE_MAX(): int {
        return 11;
    }

    public static function CPF_MIN(): int {
        return 11;
    }

    public static function CPF_MAX(): int {
        return 11;
    }

    public static function RG_MIN(): int {
        return 8;
    }

    public static function RG_MAX(): int {
        return 8;
    }
    
}
