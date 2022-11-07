<?php
include "database.php";

$sql_consulta = "SELECT * FROM funcionario";

$sql = mysqli_query($conexao, $sql_consulta);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        h1 {
            text-align: center;
        }

        body {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 101, 121, 1) 35%, rgba(39, 206, 151, 1) 78%, rgba(0, 163, 255, 1) 100%);
        }

        div {
            background-color: black;
            opacity: 85%;
        }
    </style>
</head>

<body>
    <h1>Lista de Usuários</h1>
    <div>
        <table class="table table-dark table-hover">
            <tr>
                <th>ID: </th>
                <th>NOME: </th>
                <th>CPF: </th>
                <th>RG: </th>
            </tr>
            <?php while ($dados = mysqli_fetch_assoc($sql)) { ?>
                <tr>
                    <td><?php echo $dados['ID'] ?></td>
                    <td><?php echo $dados['NOME'] ?></td>
                    <td><?php echo $dados['CPF'] ?></td>
                    <td><?php echo $dados['RG'] ?></td>
                </tr>
            <?php } ?>

        </table>
    </div>
</body>

</html>