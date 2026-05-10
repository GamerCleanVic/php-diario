<?php
$nome = "Bertoldo";
$idade = 25;
$sexo = "F";
$salario_mensal = 2210.30;
$salario_anual = ($salario_mensal * 12);
$status_emprego = false;
$anos_aposentadoria = null;
$habilidades = ["PHP", "JavaScript", "HTML", "CSS"];

//Condicional Ternária
$situacaoEmprego = (($status_emprego) ? 'Empregado: sim.' : 'Desempregado: não.');

//Condicional Ternária
$anos_necessarios_para_aposentar = (($sexo == "M") ? IDADE_APOSENTADORIA_MASCULINA : IDADE_APOSENTADORIA_FEMININA);