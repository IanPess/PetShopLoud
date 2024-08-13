<?php
include('includes/conexao.php');

$sql = "SELECT * FROM Cidade";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Cidades</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Cidades</h1>
        <table align="center" border="1" width="800">
            <tr>
                <th>Nome da Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['nomecidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                    echo "<td><a href='alteraCidade.php?id_cidade=" . htmlspecialchars($row['id_cidade']) . "'>Alterar</a></td>";
                    echo "<td><a href='deletarCidade.php?id_cidade=" . htmlspecialchars($row['id_cidade']) . "'>Deletar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhuma cidade encontrada.</td></tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>
