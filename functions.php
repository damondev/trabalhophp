<?php
	function criarArquivo($nomeArquivo, $conteudo){
		$arquivo = fopen($nomeArquivo, 'w');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}
	
	function escreverArquivo($nomeArquivo, $conteudo){
		$arquivo = fopen($nomeArquivo, 'a');
		fwrite($arquivo, $conteudo);
		fclose($arquivo);
	}
	
	
	function lerArquivo($nomeArquivo){
		$arquivo = fopen($nomeArquivo, 'r');
		$tamanho = filesize($nomeArquivo);
		$dados = fread($arquivo, $tamanho);
		return $dados;
	}
		
	

	function validarLogin(){
		if(time() - $_SESSION['ultimaAtividade'] <= 60){
			$_SESSION['logado'] = true;
			$_SESSION['ultimaAtividade'] = time();
		}else{
			$_SESSION['logado'] = false;
			session_unset();
			session_destroy();
		}
	}
	
?>