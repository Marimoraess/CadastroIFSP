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

        h1 {
            color: #6f42c1; /* Roxo */
            margin-bottom: 20px;
        }

        fieldset {
            border: 2px solid #6f42c1; /* Roxo */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px; /* Adicionado para separação */
        }

        legend {
            font-size: 1.5em;
            color: #6f42c1;
            font-weight: bold;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
            color: #343a40;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #6f42c1; /* Roxo */
            outline: none;
        }

        button {
            padding: 12px 20px;
            background-color: #6f42c1; /* Roxo */
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #5a2e91; /* Roxo escuro */
        }

        .btn-container {
            margin-top: 30px;
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
        <h1>Cadastro do Cliente</h1>
        <form action="CadastroClienteExe.php" method="post">
            <fieldset>
                <legend>Dados do Cliente</legend>
                <div>
                    <label for="nome">Nome do Cliente</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div>
                    <label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                    <?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        echo $sql;
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value= '".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                        ?>
                    </select>

                </div>
                <div>
            <label for="ativo">Situação</label>
            <input type="hidden" name="ativo" id="ativo" value="0">
            <input type="checkbox" name="ativo" id="ativo" value="1">Ativo <br><br>
        </div> 
                
                <button type="submit">Cadastrar</button>
            </fieldset>
        </form>
        <div class="btn-container">
            <a href="ListarCliente.php" class="btn">Consultar Cadastros</a>
            <a href="index.html" class="btn">Voltar à página inicial</a>
        </div>
    </div>
</body>
</html>
