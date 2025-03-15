<?php

namespace App\Services;

use App\Validators\HtmlValidator;

use App\Models\Sorteio;
use App\Models\ApostadorBilhete;

class HtmlService extends BaseService {
    
    public static function generateJson(array $data) {
        $return = false;
        try {
            HtmlValidator::validator($data);
            $return = [
                'sorteio' => Sorteio::selectSorteio($data),
                'apostador_bilhetes' => ApostadorBilhete::selectApostadoresBilhetesSorteio($data)
            ];
        } catch (\Exception $e) {
            return self::error($e->getMessage());
        }
        return $return;
    }

    public static function generateHTML($json) {

        $numeros_sorteados = $json['sorteio']['numeros_sorteados'];

        $styleBorder = 'style="border:1px solid black"';
        $style = 'style="padding-left:1em; width:5em; text-align:center; "';
        $styleCenter = 'style="text-align:center"';

        $html = "
            <table $styleBorder>
                <tr $styleBorder>
                    <th>Numeros Sorteados: </th>
                    <th>$numeros_sorteados</th>
                </tr>
            </table>
            <table $styleBorder>
                <tr $styleBorder>
                    <th>Nome</th>
                    <th>Numeros Escolhidos</th>
                    <th>Acertos</th>
                </tr>
        ";

        for ($i = 0; $i < count($json['apostador_bilhetes']); $i++) {
            $nome = $json['apostador_bilhetes'][$i]['nome'];
            $numeros_escolhidos = $json['apostador_bilhetes'][$i]['numeros_escolhidos'];
            $acertos = $json['apostador_bilhetes'][$i]['acertos'];
            $html .= "
                    <tr>
                        <td>$nome</td>
                        <td $style >$numeros_escolhidos</td>
                        <td $styleCenter >$acertos</td>
                    </tr>
            ";
        }
        $html .= "
            </table>
        ";

        return $html;
    }

}