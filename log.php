<?php
    if(isset($_POST['submit'])){
        include_once('configuracoes.php');
        $nome = $_POST['user'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO login.loginuser(nomeuser, senhauser) VALUES ('$nome', '$senha')");
    };
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(189, 184, 184);
            display: flex;
            justify-content: center;
            align-content: center;
            align-items: center;
        }

        div{
            width: 200px;
            height: 200px;
            background-color: black;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 5px 5px 0px gray;
            text-align: center;
            margin-top: 200px;
            
        }
        label{
            background-color: white;
            padding: 5px;
            border-radius: 10px;
            display: block;
        }
        input{
            border-radius: 5px;
            margin: 10px;
            height: 20px;
        }
        form{
            display: block;
            background-color: yellow;
            height: 150px;
            border-radius: 10px;
            box-shadow: 5px 5px 0px gray;
        }

        #submit{
            width: 200px;
            height: 40px;
            background-color: yellow;
            color: black;
            cursor: pointer;
            margin: auto;
            border-radius: 10px;
            margin-top: 10px;
            box-shadow: 5px 5px 0px gray;
        }

        #submit:hover {
            margin-top: 15px;
            margin-right: -5px;
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div>
        <form action="log.php" method="POST">
            <label for="user">Nome de Usuario</label>
            <input type="text" name="user" id="user">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>