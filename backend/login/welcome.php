<?php
require_once "../header.php";

session_start();

if(empty($_SESSION['usuario'])){
    header('Location: ../');
    exit();
}

if(!empty($_COOKIE['tema'])){
    $tema = $_COOKIE['tema'];

    if($tema == 'escuro'){
        $bg_tema = '#181818';
        $cor = '#ccc';
    }else{
        $bg_tema = '#fff';
        $cor = '#000';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PÁGINA SECRETA</title>
</head>
<body style="background-color: <?= $bg_tema ?>; color: <?= $cor ?>;">
    <?php
        echo "Bem vindo, ". $_SESSION['usuario'];
        echo '<br>';

        echo "<br><br><a href='../login/logout.php'><button type='button' class='buttonVoltar'>Sair</button></a>";
    ?>
</body>
</html>
