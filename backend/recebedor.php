<?php
session_start();
require_once "header.php";

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);;
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

if($nome && $idade && $email){
    $expiracao = time() + (86400 * 30);
    setcookie('nome', $nome, $expiracao);

    echo "<br>Nome: ".$nome;
    echo "<br>E-mail: ".$email;
    echo "<br>Idade: ".$idade;
}else{
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header("Location: index.php");
    exit;
}
