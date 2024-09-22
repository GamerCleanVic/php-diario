<?php
//Módulo 2: Funções - Tipagem de Parâmetros e Retornos #14
require_once "header.php";

function somar(float $num1, float $num2, float $num3 = null):float {
    if($num3){
        return $num1 + $num2 + $num3;
    }else{
        return $num1 + $num2;
    }

}

// $result = somar(2.1, 3.1);
// echo $result;
//echo "<br><br>";

function verificaIdade(int $anoNascimento):int {
    $anoAtual = date("Y");
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}
//echo verificaIdade(1994);

function portaoDeBalada(int $anoNascimento, bool $acompanhado = false):string {
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

//echo "<br><br>";

echo "1994 sem acompanhante: ".portaoDeBalada(1994)."<br>";
echo "2007 com acompanhante: ".portaoDeBalada(2007, true)."<br>";
echo "2014 com acompanhante: ".portaoDeBalada(2014, true)."<br>";
