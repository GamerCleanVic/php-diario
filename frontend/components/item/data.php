<?php

    $nome = "Alessandro";
    $idade = 25;
    $sexo = "M";
    $salario_mensal = 2210.30;
    $esta_empregado = true;
    $status_emprego = ($esta_empregado) ? "Empregado" : "Desempregado";

    $habilidades = ['PHP', 'JavaScript', 'HTML', 'CSS'];
    $stacks = implode(', ', $habilidades);

    $salario_anual = $salario_mensal * 12;
    $aposentaEm = null;
    $aposentadoria = ($sexo === 'M') ? ($aposentaEm =
    (IDADE_APOSENTA_MASCULINA - $idade)) :
    ($aposentaEm = (IDADE_APOSENTA_FEFININA - $idade));
