<?php
	session_start();
	include 'functions.php';
	$dados = lerArquivo('vendas.txt');
	$dados = explode('|', $dados);
	if(isset($_SESSION['usuario'])){
		validarLogin();
		if($_SESSION['logado'] == false){
			header('location: login.php');
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
			width: 100%;
			border: 1px solid black;
			border-collapse: collapse;
			border-radius: 900px;
		}
		tr:hover {background-color: coral;
		}
		body{
	   width: 98%;
       height: 97vh;
       font-family: 'Poppins' sans-serif;
       background: linear-gradient(-45deg, #ffce51, #ff7253, #fd5754);
		}

		th {
			background-color: white;
		}
		h2{
      font-size: 1.8em;
      color: black;
      font-family:arial ;
	  border-radius: 10px;
      text-align: center; 
      padding: 50px;
      background: yellow;
    }
	a{
		position: relative;
    font-weight: 8786;
    text-decoration:none ;
	text-align: center;
    color: white;
    border: 3px solid darkorange;
    border-radius: 5px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}

</style>
<body>
<h2>REGISTRO DE VENDAS</h2>
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


