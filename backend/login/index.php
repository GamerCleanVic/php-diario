<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login/css/style.css">
    <title>LOGIN</title>
</head>
<body>
    <form action="./login/login.php" method="post" class="formLogin">
        <div class="labelComum1">
            <label for="username">USUÁRIO:</label>
            <input type="text" name="usuario">
        </div>
        <div class="labelComum2">
            <label for="password">SENHA:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="lembrar">TEMA PREFERIDO: </label>
            <select name="tema" class="labelComum3">
                <option value="escuro">escuro</option>
                <option value="claro">claro</option>
            </select>
        </div>
        <input type="submit" value="Login" class="loginButton">
    </form>
</body>
</html>
<?php
