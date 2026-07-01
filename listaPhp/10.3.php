<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
<!--Recebendo dados via POST-->
<?php

//verifica se variaveis nome, email, peso e altura, e calcula o IMC, se não exixstir redireciona para a página 10_pagina2.php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['peso']) && isset($_POST['altura'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    // Calculando o IMC
    $imc = $peso / ($altura * $altura);

    // Exibindo os dados coletados
    echo "<h1>Resultados</h1>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Peso: $peso kg</p>";
    echo "<p>Altura: $altura m</p>";
    echo "<p>IMC: " . number_format($imc, 2) . "</p>";
} else {
    header("Location: 10_pagina2.php?erro=faltando_dados");
}
?>
</body>
</html>