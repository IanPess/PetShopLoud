<?php
include('includes/conexao.php');

$sql = "SELECT * FROM Animal";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Animais</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1>Listagem de Animais</h1>
        <table align="center" border="1" width="800">
            <tr>
                <th>Foto do Animal</th>
                <th>Nome do Animal</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Idade</th>
                <th>Castrado</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    // Data original do banco de dados
                    $data_original = $row['dataa'];

                    // Cria um objeto DateTime a partir da data original
                    $data = new DateTime($data_original);

                    // Formata a data para o formato DD-MM-YYYY
                    $data_formatada = $data->format('d-m-Y');

                    // Calcula a idade
                    $nasc = new DateTime($data_original);
                    $atual = new DateTime();
                    $idade = $atual->diff($nasc)->y;

                    echo "<tr>";
                    if($row['foto'] == "")
                        echo "<td></td>";
                    else
                        echo "<td><img src='".$row['foto']."'width='120' height='100'/></td>";
                    echo "<td>" . htmlspecialchars($row['nome_animal']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['especie']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['raca']) . "</td>";
                    echo "<td>" . htmlspecialchars($data_formatada) . "</td>";
                    echo "<td>" . htmlspecialchars($idade) . " anos</td>";
                    echo "<td>" . ($row['ativo'] ? 'Sim' : 'Não') . "</td>";
                    echo "<td><a href='alteraAnimal.php?id_animal=" . htmlspecialchars($row['id_animal']) . "'>Alterar</a></td>";
                    echo "<td><a href='deletarAnimal.php?id_animal=" . htmlspecialchars($row['id_animal']) . "'>Deletar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum animal encontrado.</td></tr>";
            }
            ?>
        </table>
        <button class="btn"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>
