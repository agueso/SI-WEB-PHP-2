<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Cliente</title>
</head>
<body>
    <h1>Inserir Cliente</h1>
    <form method="POST" action="../../index.php?classe=Cliente&acao=store">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>

        <label for="dt_nasc">Data de Nascimento:</label>
        <input type="date" id="dt_nasc" name="dt_nasc" required>
        <br><br>

        <button type="submit">Inserir</button>
    </form>
</body>
</html>