<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input {
            margin-bottom: 10px;
        }
    button {
            background-color: green;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<!-- verificando se as variaveis $_GET['nome'] e $_GET['email'] existem, se existirem vamos pegar os valores delas e armazenar nas variáveis $nome e $email-->
    <?php
    if (isset($_GET['nome']) && isset($_GET['email'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo "<p>Nome: $nome</p>";
        echo "<p>E-mail: $email</p>";
    } else {
        header("Location: 10_pagina1.php?erro=faltando_dados");
    }
    ?>
    <form method="post" action="10_pagina3.php">
        <input type="hidden" name="nome" value="<?php echo htmlspecialchars($nome); ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.1" required>
        <label for="altura">Altura (m):</label>
        <input type="number" id="altura" name="altura" step="0.01" required>
        <br>
        <button type="submit">Calcular IMC</button>
    </form>

</body>
</html>