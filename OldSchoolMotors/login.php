<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));        
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;            
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            width: 88%;
        }
        #submit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
    </style>
</head>
<body>
    <form action="teste.php" method="POST">
    <div class="telaLogin">
        <h1>LOGIN</h1>
        <input type="email" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="senha" placeholder="Senha">
        <br><br>
        <input type="submit" name="submit" id="submit" value="Enviar">
        <h5>Ainda não tem cadastro: <a href="cadastro.php">Clique aqui!</a></h5>
    </div>
    </form>
</body>
</html>