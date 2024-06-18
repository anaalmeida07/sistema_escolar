<?php

if (isset($_POST['button'])) {
    $code = $_POST['code'];
    $senha = $_POST['password'];
    if ($code == '') {
        echo "<h2>Por favor, digite o número do cartão ou código de acesso!</h2>";
    } else if ($senha == '') {
        echo "<h2>Por favor, digite a senha!</h2>";
    } else {
        $sql = "SELECT * FROM login WHERE code = ? AND senha = ?";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            // Bind dos parâmetros e execução da consulta
            mysqli_stmt_bind_param($stmt, "ss", $code, $senha);
            mysqli_stmt_execute($stmt);

            // Obter resultado da consulta
            $result = mysqli_stmt_get_result($stmt);

            // Verificar se há resultados
            if (mysqli_num_rows($result) > 0) {
                while ($res_1 = mysqli_fetch_assoc($result)) {
                    $status = $res_1['status'];
                    $code = $res_1['code'];
                    $senha = $res_1['senha'];
                    $nome = $res_1['nome'];
                    $painel = $res_1['painel'];

                    if ($status == 'Inativo') {
                        echo "<h1>Você está Inativo, procure a administração!</h1>";
                    } else {
                        session_start();
                        $_SESSION['code'] = $code;
                        $_SESSION['nome'] = $nome;
                        $_SESSION['painel'] = $painel;
                        $_SESSION['senha'] = $senha;
                      
                        if($painel == 'admin'){
                        echo "<script language='javascript'>window.location='admin';</script>";
                    }else if($painel == 'aluno'){
                        echo "<script language='javascript'>window.location='aluno';</script>";
                    }//else if($painel == 'portaria'){
                        //echo "<script language='javascript'>window.location='portaria';</script>";}
                    else if($painel == 'professor'){
                        echo "<script language='javascript'>window.location='professor';</script>";
                    }else if($painel == 'tesouraria'){
                        echo "<script language='javascript'>window.location='tesouraria';</script>";
                    }
                }
            } 
            } else {
                echo "<h1>Dados Incorretos</h1>";
                // header("Location: index.php");
                exit();
            }
        }
    }
}
