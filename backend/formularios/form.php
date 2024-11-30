<?php
    require_once 'functions.php';

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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['tecnologia'])){
            $erro = "Selecione uma Tecnologia.<br><br>";
        }
        $tecnologiaSelecionada = $_POST['tecnologia'] ?? [];

        if(count($tecnologiaSelecionada) != 1){
            $erro = "Selecione apenas uma Tecnologia.<br><br>";
        }elseif($tecnologiaSelecionada[0] != 'HTML'){
            $erro = 'Você deve selecionar o HTML.<br><br>';
        }else{
            $sucesso = "Sucesso, HTML selecionado.<br><br>";
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
    <h1>Selecione o HTML</h1>
    <form method="POST" class="form01">
        <i class="msgErro"><?= exibirErro($erro) ? $erro : '' ?></i>
        <i class="msgSuccess"><?= exibirErro($sucesso) ? $sucesso : '' ?></i>

        <select name="tecnologia[]" multiple>
            <?php foreach($tecnologias as $tecnologia) : ?>
                <option value="<?= $tecnologia ?>">
                    <?= in_array($tecnologia, $tecnologiaSelecionada) ? "selected" : "" ?>
                    <?= $tecnologia ?>
                </option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
