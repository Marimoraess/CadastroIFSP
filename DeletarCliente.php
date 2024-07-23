
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Cliente</title>
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
    <body>
    <div class="container">
        <h1>Deletar Cliente</h1>
        <?php
            include('includes/conexao.php');
            $id = $_GET['id'];
            
            // Preparando a consulta SQL com prepared statement
            $sql = "DELETE FROM cliente WHERE id = ?";
            $stmt = mysqli_prepare($con, $sql);
            mysqli_stmt_bind_param($stmt, "i", $id);
            mysqli_stmt_execute($stmt);
            
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo '<div class="message success"><h2>Dados deletados com sucesso!</h2></div>';
            } else {
                echo '<div class="message error"><h2>Erro ao deletar</h2><p>' . mysqli_error($con) . '</p></div>';
            }
            
            mysqli_stmt_close($stmt);
            mysqli_close($con);
        ?>
        <!-- Botão para voltar à página anterior -->
        <button class="btn" onclick="history.back()">Voltar</button>
    </div>
</body>
</html>