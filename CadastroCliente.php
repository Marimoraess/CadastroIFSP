<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Cliente</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #e9ecef;
            color: #343a40;
            text-align: center;
            padding: 40px;
        }

        .container {
            width: 100%;
            max-width: 500px;
            margin: auto;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        h1, h2 {
            color: #6f42c1; /* Roxo */
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 12px 20px;
            margin-right: 10px;
            text-decoration: none;
            color: #ffffff;
            background-color: green; 
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: rgb(58, 197, 58); 
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
            // Inclui o arquivo de conexão com o banco de dados
            include('includes/conexao.php');

            // Obtém os dados do formulário
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            // Exibe os dados recebidos
            echo "<h1>Dados do Cliente</h1>";
            echo "<p><strong>Nome:</strong> $nome</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Senha:</strong> $senha</p>";

            // Monta a query SQL para inserir os dados na tabela
            $sql = "INSERT INTO Cliente (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

            // Executa a query no banco de dados
            $result = mysqli_query($con, $sql);

            // Verifica se a inserção foi bem-sucedida
            if ($result) {
                echo "<h2>Dados cadastrados com sucesso!</h2>";
            } else {
                echo "<h2>Erro ao cadastrar!</h2>";
                echo "<p class='error-message'>" . mysqli_error($con) . "</p>";
            }

            // Fecha a conexão com o banco de dados
            mysqli_close($con);
        ?>
        <a href="index.html" class="btn">Voltar à página inicial</a>
        <a href="CadastroCliente.html" class="btn">Cadastrar outro cliente</a>
    </div>
</body>
</html>
