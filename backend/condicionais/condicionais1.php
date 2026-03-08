<?php

echo "<h1><font>Condicionais</font></h1>";

$nome = 'Alex';
$idade = 38;

if($nome == 'Alessandro'){
  echo 'Olá <b>Alessandro</b>!';
}else{
  echo 'Nome <b>não encontrado</b>!';
}

if($idade >= 18){
  echo '<br><br>Acesso <b>permitido</b>!';
}else{
  echo '<br><br>Acesso <b>negado</b>!';
}
