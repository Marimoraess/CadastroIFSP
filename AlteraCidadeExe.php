<?php
include('includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$estado = $_POST['estado'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Fundo claro */
            color: #343a40;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #6f42c1; /* Roxo */
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin: 10px 0;
            color: #495057;
        }

        .success {
            color: #28a745; /* Verde */
            font-weight: bold;
        }

        .error {
            color: #dc3545; /* Vermelho */
            font-weight: bold;
        }

        .btn-container {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #ffffff;
            background-color: #6f42c1; /* Roxo */
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #5a2e91; /* Roxo escuro */
        }
    </style>
</head>
<body>
    <h1>Alteração</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Estado: $estado</p>";

        $sql = "UPDATE cidade SET
                    nome = '$nome',
                    estado = '$estado'
                WHERE id = $id";

        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<p class='success'>Dados atualizados!</p>";
        } else {
            echo "<p class='error'>Erro ao atualizar dados! " . mysqli_error($con) . "</p>";
        }
    ?>
    <div class="btn-container">
        <a href="ListarCidade.php" class="btn">Consultar Cadastros</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>
