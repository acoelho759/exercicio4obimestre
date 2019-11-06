<?php

    //local no qual o banco de dados está instalado
    $local = "localhost:3307";
    $usuario = "root";
    $senha = "usbw";
    $bd = "ex_4bimestre";

    $conexao = mysqli_connect($local,$usuario,$senha,$bd) 
                    or die("ERRO");
	
	mysqli_set_charset($conexao,"utf8");

?>
