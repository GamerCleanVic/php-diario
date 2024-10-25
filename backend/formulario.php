<?php
require_once "header.php";

    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     echo 'Formulário enviado com sucesso!';
    // }else{
    //     echo 'Ainda não foi enviado nada!';
    // }

    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = htmlspecialchars($_POST['login']);
        $senha = htmlspecialchars($_POST['password']);
        if($login == 'ADMIN' && $senha == 'ADMIN'){
            echo 'Login efetuado com sucesso!';
        }else{
            echo 'Falha no login ou senha!';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO DE LOGIN</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Senha"><br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>
