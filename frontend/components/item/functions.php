<?php
//Cálculo do Salário Anual

/**
 *Calcula salário anual baseado no mensal
*/
function calcularSalarioAnual(float $salarioMensal):float {
    //13º salário + 1/3 de férias
    $tercoDeFerias = $salarioMensal / 3;
    $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
    return $salarioAnual;
}

//Quantos anos faltam para se aposentar
function anosAposentar(int $anoNascimento, int $anoAposentadoria, string $genero = 'M') {
    if($genero === 'M'){
        $anoAposentadoria = 65;
        return $anoNascimento - $anoAposentadoria;
    }else{
        $anoAposentadoria = 62;
        return $anoNascimento - $anoAposentadoria;
    }
}

//Transformar número em valor monetário
function convertNumberToBRL(float $number):string {
    return number_format($number, 2 , ',', '.');
}
