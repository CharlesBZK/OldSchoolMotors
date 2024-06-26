<?php
session_start();

if(isset($_POST["submit"])){


    include_once("config2.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,telefone,sexo,data_nasc)
    VALUES ('$nome', '$email', '$senha', '$telefone', ' $sexo', '$data_nasc')");

    header('Location: login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            color: white;
        }
        fieldset{
            border: 3px solid dodgerblue;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
           position: absolute;
           top: 0px;
           left: 0px;
           pointer-events: none; 
           transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~.labelInput{
            top: -20px;
            font-size: 12px;
            color: red;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
            font-family: Arial, Helvetica, sans-serif;
        }
        #submit{
            background-image: linear-gradient(to right, blue, rgb(70, 5, 100));
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>
<body>
    <a href="login.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Cliente</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="mail" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="Feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="Masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="Outro" required>
                <label for="outro">Outro</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>                
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>
</body>
</html>