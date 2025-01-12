<?php
require_once 'functions.php';

$formas_pagamento = ['cartao', 'boleto', 'dinheiro'];
$formas_pagamento_user = ['cartao', 'dinheiro'];

$tecnologias = [
    'HTML',
    'CSS',
    'JavaScript',
    'PHP'
];
$erro = null;
$sucesso = null;
$tecnologiaSelecionada = [];

$opcoesValidas = [
    'javascript' => 'JAVASCRIPT',
    'php' => 'PHP',
];
$tecnologias_banco = [
    [
        'codigo' => 'html',
        'nome' => 'HTML'
    ],
    [
        'codigo' => 'css',
        'nome' => 'CSS'
    ]
];
$tecnologias_api = [
    'html' => 'HTML',
    'css' => 'CSS',
    'javascript' => 'JAVASCRIPT',
    'php' => 'PHP',
    'bootstrap' => 'Bootstrap',
];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['honeypot'])){
        $erro = "Ops, robô detectado!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./formularios/css/style.css">
    <title>FORMULÁRIOS</title>
</head>
<body>
    <h1>Preencha o formulário.</h1>
    <form method="POST" class="form01">
        <i class="msgErro"><?= exibirErro($erro) ? $erro : '' ?></i><br />
        <i class="msgSuccess"><?= exibirErro($sucesso) ? $sucesso : '' ?></i><br />


        <input type="text" name="nome" placeholder="Digite seu e-mail: " /><br />
        <input type="text" name="email" placeholder="Digite seu nome: " /><br />
        <input type="text" name="mensagem" placeholder="Digite sua mensagem: " /><br />
        <input type="hidden" name="honeypot" value="" />
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
