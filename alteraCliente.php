<?php
include('includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cliente WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <style type="text/css">
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Fundo claro */
            color: #343a40;
            text-align: center;
            padding: 20px;
        }

        fieldset {
            border: 2px solid #6f42c1; /* Roxo */
            border-radius: 8px;
            padding: 20px;
            background-color: #ffffff; /* Branco */
        }

        legend {
            font-size: 1.5em;
            color: #6f42c1; /* Roxo */
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #6f42c1; /* Roxo */
        }

        input[type="text"],
        select {
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 1em;
            border: 1px solid #6f42c1; /* Roxo */
            border-radius: 4px;
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745; /* Verde */
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
        }

        button:hover {
            background-color: #218838; /* Verde escuro */
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
    <?php
        include('includes/conexao.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM cliente WHERE id=$id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
    ?>
    <form action="AlteraClienteExe.php" method="post">
        <fieldset>
            <legend>Alterar Cliente</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']?>" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $row['email']?>" required>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div style="width: 48%;">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" value="<?php echo $row['senha']?>" required>
                </div>
                <div style="width: 48%;">
                    <label for="cidade">Id Cidade</label>
                    <input type="number" name="id_cidade" id="cidade" value="<?php echo $row['id_cidade']?>" required>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCliente.php" class="btn btn-secondary">Consultar Cadastros</a>
        <a href="index.html" class="btn btn-secondary">Voltar à página inicial</a>
    </div>
</body>
</html>