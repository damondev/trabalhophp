<?php
	session_start();
	include 'functions.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$usuario_valido = lerArquivo('usuario.txt');
	$senha_valido = lerArquivo('senha.txt');
	

	if(filesize('usuario.txt') > 0 || filesize('senha.txt') > 0) {
		if($usuario == $usuario_valido){
			if($senha == $senha_valido){
				$_SESSION['usuario'] = 'funcionário' ;
				$_SESSION['ultimaAtividade'] = time();
				header('location:inicio.php');
			}else{
				header('location:login.php');
			}
		}else{
			header('location:login.php');	
		}
	}else{
		header('location: cadastroinvalido.php');
	}
	
?>

