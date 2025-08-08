<?php
//Próxima aula: Módulo 1 - Manipulação de dados com Arrays no PHP
$nome = Array("Alessandro", "João");

$numeros = [1, 2, 30];

$carros = [
  "Alessandro" => 1,
  "Maria" => 2,
  "João" => 30
];

$chaves = array_keys($carros);
$i = 0;
foreach($carros as $carro){
  echo $chaves[$i]." tem $carro carro(s).<br>";
  $i++;
}

$informacoes = [
  "Alessandro" => [
    "carros" => 1,
    "idade" => 32,
    "altura" => 174,
    "cidade" => "Rio de Janeiro"
  ],
  "João" => [
    "carros" => 2,
    "idade" => 35,
    "altura" => 160,
    "cidade" => "São Paulo"
  ]
];

echo "<pre>";
  var_dump($informacoes);
echo "<br />";
  var_dump($informacoes["Alessandro"]["carros"]);
echo "</pre>";
