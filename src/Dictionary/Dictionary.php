<?php

namespace App\Dictionary;

class Dictionary {

    public static function dictionary($arg = 'error') {

        $return['title'] = [
            'kabum' => "KABUM",
        ]; 

        $return['label'] = [
            'loginTitle' => "Faça login para iniciar a sessão",
            'loginButton' => "Logar"
        ]; 

        $return['error'] = [
            'fieldRequired' => "O campo (@field) é requerido",
            'fieldType' => "O campo (@field) não é do tipo @type ele é @gettype",
            'fieldNotType' => "O campo (@field) de valor @value ele não é um @type",
            'idSorteioNotExists' => "O Id do sorteio não existe",
            'sorteioHappened' => "O sorteio já foi concluido",
            'sorteioNotHappened' => "O sorteio ainda não foi feito",
            'validateQuantNumbers' => "A quantidade de numeros a sortear não esta entre 6 e 10 (inclusive)",
            'validateQuantTryNumbersGreaterThanZero' => "A quantidade de apostas precisa ser maior que 0",
            'validateQuantTryNumbersLessThanFiftyOne' => "A quantidade de apostas por usuário não pode ultrapassar 50 apostas",
            'validatorSameNumbers' => "Esses numeros já foram apostados para esse usuario nessa aposta",
            'userNotExists' => "Esse usuario não existe",
            'tokenNotFound' => "O token não foi encontrado",
            'incorrectLogin' => "Login incorreto",
            'deleteClientError' => "Erro ao apagar o cliente",
            'deleteEnderecoError' => "Erro ao apagar o endereço",
            'deleteClienteEnderecoError' => "Erro ao deletar o vinculo",
            'createClienteEnderecoError' => "Erro ao vincular um cliente a um endereco",
            'fieldMinLength' => "O campo (@field) precisa ter @length caracteres no minimo",
            'fieldMaxLength' => "O campo (@field) precisa ter @length caracteres no máximo",
        ];

        return $return[$arg];
    }

}