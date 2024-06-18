<?php
    Function conectar(){
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "sistemaEscolar";

        $con = new mysqli($servidor, $usuario, $senha, $bd);
        return $con;
    }

    $conexao = conectar();
?>