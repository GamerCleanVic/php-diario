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
    if(empty($_POST['forma_pagamento'])) {
        $erro = "Selecione uma forma de pagamento.<br><br>";
    }
    $formasPagamento = $_POST['forma_pagamento'] ?? '';

    if(!in_array($formasPagamento, $formas_pagamento_user)) {
        $erro = 'Forma de pagamento inválida.';
    } else {
        $sucesso = 'Forma de pagamento aceita!';
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
    <h1>Selecione a forma de pagamento.</h1>
    <form method="POST" class="form01">
        <i class="msgErro"><?= exibirErro($erro) ? $erro : '' ?></i>
        <i class="msgSuccess"><?= exibirErro($sucesso) ? $sucesso : '' ?></i>

        <?php foreach($formas_pagamento as $forma_pagamento) : ?>
          <hr />
          <label>
            <?= $forma_pagamento; ?>
          </label>
          <input type="radio" name="forma_pagamento" value="<?= $forma_pagamento; ?>"/><hr />
        <?php endforeach; ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
