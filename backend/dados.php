<?php
require_once "header.php";

if(!empty($_POST['login']) && !empty($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $mensagem = null;
    if(($login == 'admin') && ($password == 'admin')){
        $mensagem = "<br>Login efetuado com sucesso!";
    }else{
        $mensagem = "<br>Login ou senha inválida!";
    }

    //echo "O seu login é: $login e o se password é: $password.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="dados.php" method="POST">
    <input type="text" name="login" placeholder="Login"><br>
    <input type="password" name="password" placeholder="Senha"><br>
    <input type="submit" value="Enviar">
</form>
    <?php
        if(!empty($mensagem)){
            echo $mensagem;
        }
    ?>
</body>
</html>
