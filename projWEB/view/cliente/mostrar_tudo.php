<?php

session_start();
$clientes = $_SESSION['clientes'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>TABELA</h1>
    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>data nasc</td>
        </tr>
        <?php foreach($clientes as $cli){
            echo '<tr>';
            echo '<td>$cli->getId()</td>';
            echo '<td>$cli->getNome()</td>';
            echo '<td>$cli->getData()</td>';
            echo '<tr>';
        }
        ?>
    </table>
</body>
</html>
