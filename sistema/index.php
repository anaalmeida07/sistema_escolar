<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA ESCOLAR</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />

    <? require "conexao.php" ?>
</head>

<body>

    <div id="logo">
        <img src="img/logo.png" />

        <div id="caixa_login">
            <form name="form" method="post" enctype="multipart/form-data" action="">

                <table>

                    <tr>
                        <td>
                            <h1>Nº Cartão ou Código de acesso:</h1>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="code"></td>
                    </tr>
                    <tr>
                        <td>
                            <h1>Senha:</h1>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><input class="input" type="submit" name="button" value="Entrar"  /> <?php include "form.php"?>  </td>
                    </tr>
                </table>
            </form>
        </div>


</body>

</html>