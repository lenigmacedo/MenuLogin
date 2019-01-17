<?php
include 'conexao.php';

    $email = $_POST ["email"];
    $senha = $_POST ["senha"];

    $consulta = mysql_query ("SELECT * from tb_login WHERE email = '$email' and senha = '$senha'");
    if (mysql_num_rows($consulta) > 0) {
        header ('Location:logada.html');
    }

    else {
        echo "<script>alert('Dados incorretos.'); window.location='index.html';</script>";
    }
    
?>