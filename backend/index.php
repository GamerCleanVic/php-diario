<?php
//Módulo 1: Array pratico

require_once "header.php";

$cidades = array(
    "São Paulo",
    "Los Angeles",
    "Fortaleza",
    "Salvador",
    "San Francisco"
);

for($i = 0; $i < sizeof($cidades); $i++){
    if($i == 2){
        echo ($i+1)."ª - ".$cidades[$i];
    }
}
echo "<br><br>";

$alunos = [
    "Pedro" => 29,
    "João" => 18,
    "Gervasio" => 21
];
echo "A idade de João é: ".$alunos["João"];
echo "<br><br>";

$cores = array(
    "red",
    "blue",
    "green"
);
print_r($cores);
$cores[] = "marrom";
echo "<br><br>";
array_shift($cores);
print_r($cores);
echo "<br><br>";

$precos = [
    "ceroula" => 10,
    "brombril pá antena" => 250,
    "miojo" => 100
];

print_r($precos);
$precos["miojo"] += 10;
echo "<br><br>";
$precos["ceroula"] -= 1;
print_r($precos);
