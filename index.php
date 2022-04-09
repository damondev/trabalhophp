<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <title> Frigorífico Six </title>
</head>
<style>

.box{
    position: absolute;
    top: 50%;
    left: 50%;
    background:darkred;
    transform: translate(-50%, -50%);
    padding: 50px;
    border-radius: 10px;
    
    
     
}
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
h2{
      font-size: 1.8em;
      margin-bottom: 10%;
      color: black;
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      
    }

a{
    font-weight: 8786;
    text-decoration:none ;
    color: white;
    border: 3px solid darkorange;
    border-radius: 5px;
    padding: 10px;
    font-family: Arial, Helvetica, sans-serif;
}
body{
       width: 100%;
       height: 100vh;
       font-family: 'Poppins' sans-serif;
       background: linear-gradient(-45deg, #ffce51, #ff7253, #fd5754);
}
a:hover {
  background-color: #ff7253;

}
</style>
<body>
   <a href="index.php">
       <h1>Frigoríco Six </h1>
   </a>
<h2> Você se identifica como: </h2>

 <div class="box"> 
     <a href="login.php">VENDEDOR</a> 
     <a href="paineldevendas.php">COMPRADOR</a> 
 </div>

</body>
</html>