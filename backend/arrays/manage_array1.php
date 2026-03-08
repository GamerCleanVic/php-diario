<?php

echo "<h2><b>Manage</b> array <font>1</font></h2>";

$frutas = ["Laranja", "Limão"];

$outras_frutas = ["Abacaxi", "Uva"];

//Tamanho do elemento
$quantidadeDeItens = count($frutas);
var_dump($frutas);
echo "<br /><br /> Tamanho do Arraay frutas: <font>$quantidadeDeItens</font>";

array_push($frutas, "Uva");

echo '<br /> <br />';
var_dump($frutas);
echo "<br /><br /> Tamanho do Arraay frutas: <font>$quantidadeDeItens</font>";

/*array_shift($frutas); //retira o primeiro */
array_pop($frutas);//retira o último

echo '<br /> <br />';
var_dump($frutas);
echo "<br /><br /> Tamanho do Arraay frutas: <font>$quantidadeDeItens</font>";

//Modificar individual sem função
$frutas[1] = "Uva";

echo '<br /> <br />';
var_dump($frutas);
echo "<br /><br /> Tamanho do Arraay frutas: <font>$quantidadeDeItens</font>";

$temLaranja = in_array("Laranja", $frutas);

echo "<br /><br />Tem laranja no vetor? "; var_dump($temLaranja);

$todasFrutas = array_merge($frutas, $outras_frutas);

echo '<br><br>';
var_dump($todasFrutas);
