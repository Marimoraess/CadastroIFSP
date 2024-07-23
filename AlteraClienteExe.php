<?php
include('includes/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteração</title>
   <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Alteração</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Senha: $senha</p>";

        $sql = "UPDATE cliente SET
                    nome = '$nome',
                    email = '$email',
                    senha = '$senha'
                WHERE id = $id";
         
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<p class='success'>Dados atualizados!</p>";
        } else {
            echo "<p class='error'>Erro ao atualizar dados! " . mysqli_error($con) . "</p>";
        }
    ?>
    <div class="btn-container">
        <a href="ListarCliente.php" class="btn">Consultar Cadastros</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>
