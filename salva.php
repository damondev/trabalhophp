<?php
	include 'functions.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
if(empty($usuario) || empty($senha)) {
	header('location: cadastroinvalido.php');
}else{
	criarArquivo('usuario.txt', $usuario);
	criarArquivo('senha.txt', $senha);
	header('location: login.php');
}
?>