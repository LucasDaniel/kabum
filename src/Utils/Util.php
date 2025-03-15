<?php

namespace App\Utils;

class Util {

    public static function getNewToken($id_user): string {
        return md5(strtotime(date("Y-m-d H:i:s"))+rand(1,999999)+($id_user*rand(1,999999)));
    }

    public static function getNowMoreOneHour(): string {
        return date("Y-m-d H:i:s",(strtotime(date("Y-m-d H:i:s"))-10800));
    }

}