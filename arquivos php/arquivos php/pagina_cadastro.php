<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome');
$senha = filter_input(INPUT_POST, 'senha');
$email = filter_input(INPUT_POST, 'email');
$cpf = filter_input(INPUT_POST, 'cpf');
$datnasc = filter_input(INPUT_POST, 'datnasc');
$rg = filter_input(INPUT_POST, 'rg');
$endereco = filter_input(INPUT_POST, 'endereco');


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO Cliente (nome, senha, email,cpf,datanasc,rg,enderecofk_endereco) VALUES ('$nome','$senha', '$email', '$cpf','$datnasc','$rg','$endereco' NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	
	header("Location: login.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
