<?php
//Módulo 3: Lidando com Mensagens de Erro em Formulários #7
require_once "header.php";
//require_once "../frontend/components/item/forms/campanha.php";
require_once "../frontend/components/item/forms/dados.php";

?>
<form action="dados.php" method="POST">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Senha"><br>
    <input type="submit" value="Enviar">
</form>
