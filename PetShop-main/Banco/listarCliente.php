<?php
include('includes/conexao.php');

$sql = "SELECT Cliente.*, Cidade.nomecidade, Cidade.estado 
        FROM Cliente
        JOIN Cidade ON Cliente.id_cidade = Cidade.id_cidade";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Clientes</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Clientes</h1>
        <table align="center" border="1" width="800">
            <tr>
                <th>Nome do Cliente</th>
                <th>Email</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['endereco']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['bairro']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['cep']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nomecidade']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['estado']) . "</td>";
                    echo "<td><a href='alteraCliente.php?id=" . htmlspecialchars($row['id']) . "'>Alterar</a></td>";
                    echo "<td><a href='deletarCliente.php?id_cliente=" . htmlspecialchars($row['id']) . "'>Deletar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='9'>Nenhum cliente encontrado.</td></tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>
