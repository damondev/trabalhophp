<?php
	include 'functions.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	criarArquivo('usuario.txt', $usuario);
	criarArquivo('senha.txt', $senha);
	
	header('location: login.php');
?>