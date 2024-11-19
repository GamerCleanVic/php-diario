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

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $opcao = $_POST['opcao'];
        if($opcao){
            echo "Tecnologia selecionada foi $opcao";
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
    <form method="POST" >
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
        <select name="opcao">
            <?php
            foreach($tecnologias as $tec) : ?>
                <option value="<?= $tec; ?>"><?= $tec ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
