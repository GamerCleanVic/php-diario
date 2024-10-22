<?php
require_once "header.php";

if(!empty($_POST['login'] && !empty($_POST['password']))){
    $login = $_POST['login'];
    $password = $_POST['password'];

    echo "Seu login é $login e sua senha é $password";
}
