<?php
	include 'functions.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	criarArquivo('usuario.txt', $usuario);
	criarArquivo('senha.txt', $senha);
	
	if(isset($usuario) || isset($senha)) {
		header('location: login.php');
	}else{
		header('location: cadastroinvalido.php');
	}
?>