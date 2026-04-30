<!DOCTYPE html>
<html>
<head>
    <title>Exemplo 9.4 - Post +</title>
</head>
<body>
    <form method="POST" action="">
        <label>Digite seu nome:</label>
        <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome'])) {
        $nome = htmlspecialchars($_POST['nome']);
        echo "<p>Olá, $nome!</p>";
    }

    ?>
</body>
</html>