<?php

include("conexao.php");

$nome=$_REQUEST['nome'];
$senha=$_REQUEST['senha'];
$email=$_REQUEST['email'];
$cpf=$_REQUEST['cpf'];
$datnasc=$_REQUEST['datnasc'];
$rg=$_REQUEST['rg'];
$endereco=$_REQUEST['endereco'];
$telefone=$_REQUEST['telefone'];

if($datnasc==null){
    //echo "<script type=\"text/javascript\"> alert (\"Data inválida cacete!!!!\")</script>";

    //header ("Location: cadastro.html");
}


$sql="INSERT INTO cliente (nome, senha, email,cpf,datanasc,rg, fk_endereco,telefone) VALUES ('$nome','$senha', '$email', $cpf,$datnasc,$rg,'$endereco','$telefone')";



if(mysqli_query($conexao,$sql)){
    header("Location: login.html");
} else{
    echo "Error: ".$sql.mysqli_error($conexao);


}
mysqli_close($conexao);



?>