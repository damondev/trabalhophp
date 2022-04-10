<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title>Frigorifico Six</title>
</head>
<style>
   h1{
   font-family: Arial, Helvetica, sans-serif;
   font-weight: 800;
   color: black;
   text-align: center;
   background-color: linear-gradient(-660deg, #ffce51, #ff7253, #fd5754);
   border-style: double;
   border-width: 6px;
   border-color: black;
   margin-left: 492px;
   width: 350px;
   height: 45px;
     
    }
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
     background: linear-gradient(-10deg, #ffce51, #ff7253, #fd5754);
     height: 40px;
     border: none;
     font-size: 1.2em;
     color: #fff;
     border-radius: 50px;
     outline: none;
     cursor: pointer;

    }
    a{
      color: inherit;
      text-decoration: none;
    }
     </style> 
<body>

<a href="index.php">
  <h1>Frigorífico Six</h1>
</a>

<form action='autentica.php' method='post'>
    <h2> Login </h2>
 <label> Usuário </label>
 <input type="text" name="usuario" placeholder="Digite seu nome de usuário">
 <label> senha </label>
 <input type="password" name="senha" placeholder="Digite a sua senha">
    <button><a href="cadastro.php"> Cadastre-se </a></button>
    <button><a href="inicio.php"> Entrar </a></button>
</form>
</body>
</html>