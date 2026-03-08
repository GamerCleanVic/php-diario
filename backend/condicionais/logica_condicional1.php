<?php

echo '<h1>Dominando a lógica <b>condicional #1</b></h1>';

$idade = 18;
$temCarteira = true;

if($idade >= 18 && $temCarteira){
  echo "Pode <b>dirigir</b>!";
}else{
  echo "Não pode <font>dirigir</font>!";
}
