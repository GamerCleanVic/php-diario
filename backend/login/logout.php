<?php
require_once "../header.php";

session_start();
unset($_SESSION['usuario']);
header('Location: ../');
