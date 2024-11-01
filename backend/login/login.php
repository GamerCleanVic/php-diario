<?php
require_once "../header.php";
session_start();

if(!empty($_POST['usuario']) && !empty($_POST['password'])){
    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['password']);
    if($usuario == 'admin' && $senha == 'admin'){
        $_SESSION['usuario'] = $usuario;
        if(!empty($_POST['tema'])){
            setcookie('tema', htmlspecialchars($_POST['tema']));
        }

        header('Location: ../login/welcome.php');
        echo "<br><br><a href='../'><button type='button' class='buttonVoltar'>Voltar</button></a>";
    }else{
        echo 'Usuário ou senha inválidos.';
        echo "<br><br><a href='../'><button type='button' class='buttonVoltar'>Tentar novamente</button></a>";
    }
}else{
    echo 'Preencha todos os dados';
    echo "<br><br><a href='../'><button type='button' class='buttonVoltar'>Voltar</button></a>";
}
