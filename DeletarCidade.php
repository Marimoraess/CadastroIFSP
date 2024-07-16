<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cidade</title>
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

        h2 {
            color: #28a745; /* Verde */
            margin: 10px 0;
        }

        .error {
            color: #dc3545; /* Vermelho */
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
    <h1>Deletar Cidade</h1>
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM cidade WHERE id = $id";
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            echo "<h2>Dados deletados!</h2>";
        } else {
            echo "<h2 class='error'>Erro ao deletar!</h2>";
            echo "<h2 class='error'>" . mysqli_error($con) . "</h2>";
        }
    ?>
    <div class="btn-container">
        <a href="ListarCidade.php" class="btn">Consultar Cadastros</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>
