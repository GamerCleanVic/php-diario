<?php
//Módulo 2: Funções - Tipagem de Parâmetros e Retornos #14
require_once "header.php";

function somar($num1, $num2, $num3 = null){
    if($num3){
        return "Número1: $num1, Número2: $num2, Numero3: $num3";
    }else{
        return "Número1: $num1, Número2: $num2";
    }

}

// $result = somar(2, 3);
// echo $result;

function verificaIdade($anoNascimento){
    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
function portaoDeBalada($anoNascimento, $acompanhado = false){
    $idadeParaEntrarNaBalada = 18;
    $idade = verificaIdade($anoNascimento);
    if($idade >= $idadeParaEntrarNaBalada){
        return 'Pode entrar na balada!';
    }elseif($idade >= $idadeParaEntrarNaBalada && $acompanhado){
        return 'Pode entrar na balada com seu acompanhante!';
    }elseif(($idade == ($idadeParaEntrarNaBalada -1) && $acompanhado) || ($idade == ($idadeParaEntrarNaBalada -2) && $acompanhado)){
        return 'Pode entrar na balada com seu acompanhante!';
    }else{
        return 'Não pode entrar na balada!';
    }
}

echo "1994 sem acompanhante: ".portaoDeBalada(1994)."<br>";
echo "2007 com acompanhante: ".portaoDeBalada(2007, true)."<br>";
echo "2014 com acompanhante: ".portaoDeBalada(2014, true)."<br>";
