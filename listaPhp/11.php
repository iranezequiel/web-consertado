<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--  Crie um site em PHP onde o usuário informe dois números para definir um intervalo e salve eles na sessao do PHP.-->
    <?php 
    session_start();
    // Verificando se os números estão definidos na sessão
    if (isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
        echo "<p>Intervalo salvo na sessão: {$_SESSION['numero1']} a {$_SESSION['numero2']}</p>";
    }
    ?>
    <form action="11_intervalo.php" method="get">
        <input type="number" name="numero1" placeholder="Informe o primeiro número" required>
        <input type="number" name="numero2" placeholder="Informe o segundo número" required>
        <input type="submit" value="Salvar na Sessão">
    </form>

    <?php
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $_SESSION['numero1'] = $_GET['numero1'];
        $_SESSION['numero2'] = $_GET['numero2'];
        echo "<p>Intervalo salvo na sessão: {$_SESSION['numero1']} a {$_SESSION['numero2']}</p>";
    }
    ?>
</body>
</html>