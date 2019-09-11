<?php
    $servidor="localhost";
    $usuario="root";
    $senha="";
    $db="banco_usuario";

    $conexao=mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$conexao){
        die("Houve um erro".msqli_connect_errno());
    }
?>