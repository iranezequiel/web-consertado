<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Palindromo</h1>
    
    <form method="post" action="">
        <label for="texto">Digite um texto:</label>
        <input type="text" id="texto" name="texto" required>
        <button type="submit">Calcular</button>
    </form>
    
    <?php 
    if(isset($_POST['texto'])) {
        $texto = $_POST['texto'];
        $tamanho = strlen($texto);
        $palindromo = ($texto == strrev($texto)) ? "Sim" : "Não";
        $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);
        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    ?>
    <ul>
        <li>Texto: <?php echo $texto; ?></li>
        <li>Tamanho da String: <?php echo $tamanho; ?></li>
        <li>É um palíndromo: <?php echo $palindromo; ?></li>
        <li>O número de vogais: <?php echo $vogais; ?></li>
        <li>O número de consoantes: <?php echo $consoantes; ?></li>

    </ul>
    <?php 
    }
    ?>
</body>
</html>