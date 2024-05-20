<?php
//Condicional Ternário
require "../frontend/css/phpColors.php";

$nome = "Bonieky";
$nomeCompleto = "$nome ";

echo $nomeCompleto .= $sobrenome ?? 'ntem';

