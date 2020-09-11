<?php

    echo '<pre>';
    // print_r($_POST);
    echo '</pre>';
    
    $primeiroNumero = $_POST[primeiroNumero];
    $segundoNumero = $_POST[segundoNumero];

    $soma = $primeiroNumero + $segundoNumero;
    $subtracao = $primeiroNumero - $segundoNumero;
    $multiplicacao = $primeiroNumero * $segundoNumero;
    $divisao = $primeiroNumero / $segundoNumero;

    echo "<br>A soma dos numeros é igual a $soma;<br><br>";
    echo "A subtração dos numeros é igual a $subtracao;<br><br>";
    echo "A multiplicação dos numeros é igual a $multiplicacao;<br><br>";
    echo "A divisão dos numeros é igual a $divisao;";