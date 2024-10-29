<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Idade</title>
</head>
<body>
    <h1>Verifique se você pode dirigir</h1>
    <form method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = intval($_POST['idade']);

        if ($idade >= 18) {
         echo "<p> Você pode dirigir.</p>";

        } else {
                echo "<p>Você não pode dirigir.</p>";
        }
    }
    ?>
</body>
</html>