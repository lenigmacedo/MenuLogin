<?php

include 'conexao.php';

    $email = $_POST ["email"];
    $senha = $_POST ["senha"];
    $cpf = $_POST ["cpf"];
    $rg = $_POST ["rg"];
    $dtnasc = $_POST ["dtnasc"];


    $consulta = mysql_query ("SELECT * FROM `tb_login` WHERE `cpf`='$cpf'"); 

    

    if  (mysql_num_rows($consulta) > 0)  {
        echo "<script>alert('CPF ja cadastrado.'); window.location='cadastro.html';</script>";
    }
    else {
        $consulta = mysql_query ("INSERT INTO `tb_login` (`email`,`cpf`,`rg`,`senha`,`dtnasc`) VALUES ('$email','$cpf','$rg','$senha','$dtnasc')");
        echo "<script>alert('Conta criada.'); window.location='index.html';</script>";
    }
 ?>