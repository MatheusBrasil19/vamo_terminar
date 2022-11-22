<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/index.css">
        <title>CF - Index</title>
    </head>
    <img src="../img/copa.jpg" id="img">
    <body>
    
         
        <h1>Bem-Vindo!</h1>
 
            <p id="texto">Olá, visitante! <br>
            Aqui, você encontrará as melhores cenas das Seleções premiados. <br>
            Para acessar os clipes, faça <a href="form-login.php">login</a>. <br>
            Algumas cenas:</p>
 
        
        <div class="filmes">
        <a href="https://www.youtube.com/watch?v=X_kbKQGL6bc">
        <img src="../img/franca" id="franca">
        </a>
        <a href="https://www.youtube.com/watch?v=GMLOZ2Tx0Bc">
        <img src="../img/brasil" id="brasil">
        </a>
        <a href="https://www.youtube.com/watch?v=iOeM_Zysx3Q">
        <img src="../img/inglaterra" id="inglaterra">
        </a>
        </div>
    </body>
</html>