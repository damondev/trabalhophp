<?php 
include 'functions.php';

$produto = $_POST['produto'];
$valor = $_POST['valor'];
$tempo = time();
if (empty($produto) || empty ($valor)) {
    header ('location: paineldevendas.php');
}else{
    $date = date("d/m/Y", $tempo);
    $registro = "$produto|$valor|$date|";
    escreverArquivo ('vendas.txt', $registro);
    header ('location: comprarealizada.php ');
}

?>