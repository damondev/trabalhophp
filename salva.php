<?php
	include 'functions.php';
	$usuario = $_POST['usuario'];
	$senha = $_POST['senha'];
	
if(empty($usuario) || empty($senha)) {
?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
	
</body>
</html>

<?php
}else{
	criarArquivo('usuario.txt', $usuario);
	criarArquivo('senha.txt', $senha);
	header('location: login.php');
}
?>