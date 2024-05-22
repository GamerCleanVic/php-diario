<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../frontend/css/index.css">
    <title>IDADE</title>
</head>
<body>
<form class="form1" action="index.php" method="POST">
<h1 class="titulo1">DIGITE SUA IDADE</h1>
<input autocomplete="off" class="textBox1" type="number" name="name" require><br>
<input class="botao1" type="submit">
</form>
</body>
</html>
<?php
//$idade = '';
$idade = intval($_POST["name"]);

if($idade >= 18 && $idade < 50){
    echo "Adulto";
}elseif($idade > 49){
    echo "Idoso";
}else{
    echo "Menor de idade";
}
