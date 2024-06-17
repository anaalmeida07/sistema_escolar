<?php

if (isset($_POST['button'])) {
    $code = $_POST['code'];
    $password = $_POST['password'];
    if ($code == "") {
        echo "<h2>Por favor, digite o número do cartão ou código de acesso!</h2>";
    } else if ($password == "") {
        echo "<h2>Por favor, digite a senha!</h2>";
    }/* else {
        $sql = "SELECT * FROM usuario WHERE code = ? AND password = ?";
        $result = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($result) > 0) {
            session_start();
            $_SESSION['code'] = $code;
            header("Location: home.php");
        }
    }*/
}
?>
</body>
