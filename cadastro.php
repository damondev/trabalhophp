<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title> Cadastro frigorífico six </title>
</head>
<style>
body{
       width: 100%;
       height: 100vh;
       font-family: 'Poppins' sans-serif;
       background: linear-gradient(-45deg, #ffce51, #ff7253, #fd5754);
    }
    form{
        position: relative;
        top: 40%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 20px;
        padding: 60px;
        width: min-content;
        align-items: center;
        color: #2b344b;
	}
	h1{
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
     background: linear-gradient(-10deg, #ffce51, #ff7253, #fd5754);
     height: 40px;
     border: none;
     font-size: 1.2em;
     color: #fff;
     border-radius: 50px;
     outline: none;
     cursor: pointer;
	}
</style>
<body>
<form action='salva.php' method='post'>
	<h1> Cadastro </h1>
	<label>Usuário</label>
	<input type='text' name='usuario' placeholder="Digite seu nome de usuário">
	<br>
	<label>Senha</label>
	<input type='password' name='senha' placeholder="Digite a sua senha">
	<br>
	<button type='submit'>Cadastrar</button>
</form>
</body>
</html>