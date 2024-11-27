<?php
    require_once 'functions.php';
    $erro = null;
    $sucesso = null;

    $tecnologias = [
        'HTML',
        'CSS',
        'JavaScript',
        'PHP'
    ];
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
        $opcoes = $_POST['opcoes'];
        if(count($opcoes) != 2){
            $erro = 'Selecione 2 opções exatamente!';
        }
        foreach($opcoes as $opcao){
            if(!in_array($opcao, $opcoesValidas)){
                $erro = 'A tecnologia '.$opcao.' não é válida.';
                break;
            }elseif(in_array($opcao, $opcoesValidas)){
                echo $opcao.', ';

            }
        }
        echo 'foram selecionadas.';
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
    <form method="POST" class="form01">
        <?php if(exibirErro($sucesso)) : ?>
            <p class="msgSuccess">
                <?= $sucesso; ?>
            </p>
        <?php endif; ?>
        <?php if(exibirErro($erro)) : ?>
            <p class="msgErro">
                <?= $erro; ?>
            </p>
        <?php endif; ?>
        <h1>FORMULÁRIO</h1>
        <select name="opcoes[]" multiple>
            <?php foreach($tecnologias_api as $codigo => $tecnologia) : ?>
                <option value="<?= $tecnologia ?>">
                    <?= $tecnologia ?>
                </option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
