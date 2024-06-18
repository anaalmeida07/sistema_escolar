<?//php $painel_atual = "portaria"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portaria</title>
    <link rel="stylesheet" type="text/css" href="css/portaria.css" />
    <?php require "../config.php"; ?>

</head>
<body>
<div id="box">
        <div id="porteiro">
            <h1>
            <strong>Seu código é: </strong>
            <a href="../config.php"><strong>SAIR</strong></a>
        </h1>
        </div>
        <div id="logo">
         <img src="img/logo.png"/>
        </div>
        <div id="campo_busca">
            <form name="form_busca" method="post" action="" enctype="multipart/form-data">
                <input type="text" name="cpf" value=""/>
                <input type="submit" name="send" value="Buscar"/>
            </form>
        </div>
        <div id="tabela">
            <table >
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                </tr>

            </table>
            <br><br><br><br><br><br><br><br>
            <strong>Aluno:</strong>
            <strong>Nº de matricula:</strong>
            <strong>RG:</strong>

            <a href="index.php">
                <img src="../img/correto.jpg" title="Confirmar" border="0" />
            </a>
            <a href="index.php">
                <img src="../img/deleta.png" width="24px" title="cancelar" />
            </a>

            <input type="hidden" name="codes" value=""/>
        </div>
    </div>

</body>
</html>