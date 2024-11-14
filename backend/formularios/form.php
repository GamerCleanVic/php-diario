<?php
    require_once 'functions.php';
    $erro = null;
    $sucesso = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $texto = $_POST['texto'];

        //Sanitização
        $texto = htmlspecialchars($texto);

        //Remover espaços antes e depois da palavra
        $texto = trim($texto);

        //Verificar se tem um @
        if(filter_var($texto, FILTER_VALIDATE_EMAIL) == false){
            $erro = 'E-mail inválido';
        }elseif(empty($texto)){
            $erro = 'O campo texto é obrigatório.';
        }elseif(strlen($texto) < 5){
            $erro = 'O texto tem que ter pelo menos 5 caracteres.';
        }elseif(strlen($texto) > 10){
            $erro = 'O texto deve ter no máximo 10 caracteres.';
        }else{
            $sucesso = 'Campo validado com sucesso!';
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
        <input type="text" name="texto" placeholder="Digite o texto">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
