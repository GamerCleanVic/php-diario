<?php
    $nome = "Alessandro";
    $idade = 25;
    $sexo = "M";
    $salario_mensal = 2210.30;
    $esta_empregado = true;
    $status_emprego = ($esta_empregado) ? "Empregado" : "Desempregado";

    $habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];
    $stacks = implode(', ', $habilidades);

    $salario_anual = $salario_mensal * 12;
    $aposentaEm = null;
    $aposentadoria = ($sexo === 'M') ? ($aposentaEm = (65-$idade)) : ($aposentaEm = (62-$idade));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Explorando Variáveis em PHP</title>
<style>
/*body{
display: flex;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;
} */
.container{
display: flex;
justify-content: center;
align-items: center;
height: 100%;
}
.card{
background: #fff;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
padding: 20px;
max-width: 400px;
text-align: center;
}
h1{
color: #333;
}
p{
color: #666;
font-size: 1.1em;
}
strong{
color: #000;
}
.title1{
    text-transform: uppercase;
}
</style>
</head>
<body>
<div class="container">
<div class="card">
<h1 class="title1">Ficha Cadastral</h1>
<p>Nome: <strong><?= $nome ?></strong></p>
<p>Idade: <strong><?= $idade ?></strong></p>
<p>Sexo: <strong><?= $sexo ?></strong></p>
<p>Salário Mensal: <strong><?= $salario_mensal ?></strong></p>
<p>Salário Anual: <strong><?= $salario_anual ?></strong></p>
<p>Status de Emprego: <strong><?= $status_emprego ?></strong></p>
<p>Anos para Aposentadoria: <strong><?= $aposentadoria ?></strong></p>
<p>Habilidades: <strong><?= $stacks ?></strong></p>
</div>
</div>
</body>
</html>
