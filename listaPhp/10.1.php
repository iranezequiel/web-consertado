<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input{
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
    button:hover {
        background-color: darkgreen;
    }
</style>
</head>
<body>
<!-- formulário para entrada de nome e email enviado por GET para 10_pagina2.php -->
<form method="get" action="10_pagina2.php">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <button type="submit">Enviar</button>
</form>

</body>
</html>