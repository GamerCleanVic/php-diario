<?php
//Módulo 2: Array - Aula 1
require_once "header.php";

// function somar($num1, $num2, $num3 = null){
//     if($num3){
//         return "Número1: $num1, Número2: $num2, Número3: $num3";
//     }else{
//         return "Número1: $num1, Número2: $num2";
//     }
// }

function verificaIdade($anoNascimento) {
    $anoAtual = date('Y');
    return $anoAtual - $anoNascimento;
}

function portaoDaBalada($anoNascimento, $acompanhado = false){
    $idadeParaEntrarNaBalada = 18;
    $idade = verificaIdade($anoNascimento);

    if($idade >= $idadeParaEntrarNaBalada){
        return "Pode entrar na balada!";
    }elseif($idade < $idadeParaEntrarNaBalada && $acompanhado){
        return "Pode entrar na balada com seu acompanhante!";
    }else{
        return "Você não pode entrar na balada!";
    }
}


echo "1994 sem acompanhante: ".portaoDaBalada(1994)."<br>";
echo "1999 com acompanhante: ".portaoDaBalada(1999, true)."<br>";
echo "2014 com acompanhante: ".portaoDaBalada(2014, true)."<br>";
echo "2015 sem acompanhante: ".portaoDaBalada(2015, false)."<br>";
echo "2011 sem acompanhante: ".portaoDaBalada(2011)."<br>";

