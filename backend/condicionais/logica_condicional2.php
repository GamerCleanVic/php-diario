<?php

echo '<h1>Dominando Lógica <font>Condicional</font> #2</h1>';

$idade = 18;
$temCarteira = null;

/*if($idade >= 18 || $temCarteira == true){
  echo '<font>Pode</font> dirigir no Brasil!';
}else{
  echo '<b>Não pode</b> dirigir no Brasil!';
} */

if($temCarteira === false){
  echo '<p><b>Não pode</b> dirigir no Brasil!</p>';
}
elseif($temCarteira === true){
  echo '<p><font>Pode</font> dirigir no Brasil!</p>';
}
else{
  echo '<p><font>Não sei se você pode</font> dirigir no Brasil!</p>';
}
