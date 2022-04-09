<?php
	session_start();
	include 'functions.php';
	$dados = lerArquivo('vendas.txt');
	$dados = explode('|', $dados);
	if(isset($_SESSION['usuario'])){
		validarLogin();
		if($_SESSION['logado'] == false){
			echo "Sessão expirada";
		}else{
?>
<style>
	table, td, th{
		border: 1px solid black;
		border-collapse: collapse;
		text-align: center;
		table-layout: fixed;
	
	}
	th, td:n{
		padding: 5px 10px;
		background-color: white;

		}
		td{
			background-color: rgb(21, 4, 98);
			color: white;
			
		}
		table{
			text-align: center;
			width: 98%;
			border: 1px solid black;
			border-collapse: collapse;
			border-radius: 900px;
		}
		tr:hover {background-color: coral;
		}
		body{
	   width: 100%;
       height: 100vh;
       font-family: 'Poppins' sans-serif;
       background: linear-gradient(-45deg, #ffce51, #ff7253, #fd5754);
		}
	
</style>
<body>
<h2>Bem-Vindo estimado cliente</h2>
<hr>
<table>
    <tr>
        <td>PRODUTO</td>
        <td>VALOR</td>
        <td>DATA</td>
    </tr>
    <?php for($i=0;$i<count($dados)-1;$i++) : ?>
    <tr>
        <th><?=$dados[$i]?></td>
        <th><?=$dados[++$i]?></td>
        <th><?=$dados[++$i]?></td>
    </tr>
    <?php endfor ?>
</table>
</body>

<?php	
		}
	}else{
		header('location:index.php');
	}

?>


