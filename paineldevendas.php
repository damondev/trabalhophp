<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="utf-8">
    <title> Painel de vendas </title>
</head>
<style>
    form{
     position: relative;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 20px;
        padding: 60px;
        width: min-content;
        align-items: center;
        color: #2b344b;
    }
    h2{
      font-size: 1.8em;
      margin-bottom: 10%;
      color: black;
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }
    input{
      min-width: 280px;
      border-radius: 25px;
      border: 2px #6f7e8a solid;
      padding: 7px;
      margin: 0px, 0px, 12px, -5px;
    }
    label{
    width: 100%;
    font-size: 135%;
    font-family: verdana;
    color: black;
    
    }
    button{
     font-weight: 790;
     margin-top: 10%;
     width: 100%;
     text-align: center;
     font-family: verdana;
     background:#2f4f4f;
     height: 40px;
     border: none;
     font-size: 1.2em;
     color: #fff;
     border-radius: 20px;
     outline: none;
     cursor: pointer;
    }
    body{
        background-image: linear-gradient(45deg, cyan, yellow);
        width: 100%;
        height: 45vh;
    }
   
</style>
<body>
    <h1> Realize sua compra </h1>
    <form action="tabelavenda.php" method="POST">
        <h2> COMPRA </h2>
        <label for="produto"> Nome do produto </label>
        <input type="text" name="produto" id="produto">
        <label for="valor"> Valor da venda </label>
        <input type="text" name="valor" id="valor">
        <button type="submit">Realizar compra</button>
    </form>
</body>
</html>