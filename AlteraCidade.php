<?php
include('includes/conexao.php');
$id = $_GET['id'];
$sql = "SELECT * FROM cidade WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro da Cidade</title>
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
</head>
<body>
    <form action="AlteraCidadeExe.php" method="post">
        <fieldset>
            <legend>Cadastro de Cidades</legend>
            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>">
            </div>
            <div>
                <label for="estado">Estado</label>
                <select name="estado" id="estado">
                    <?php
                    $estados = [
                        "AC", "AL", "AP", "AM", "BA", "CE", "DF", "ES",
                        "GO", "MA", "MT", "MS", "MG", "PA", "PB", "PR",
                        "PE", "PI", "RJ", "RN", "RS", "RO", "RR", "SC",
                        "SP", "SE", "TO"
                    ];
                    foreach ($estados as $estado) {
                        $selected = $row['estado'] == $estado ? "selected" : "";
                        echo "<option value=\"$estado\" $selected>$estado</option>";
                    }
                    ?>
                </select>
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </div>

            <div>
                <button type="submit">Alterar</button>
            </div>
        </fieldset>
    </form>
    <div class="btn-container">
        <a href="ListarCidade.php" class="btn">Consultar Cadastros</a>
        <a href="index.html" class="btn">Voltar à página inicial</a>
    </div>
</body>
</html>
