<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="css/bootstrap.css" rel="stylesheet" >
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            /* background: #119cff; */
            background: url(./imag7.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        form{
        text-align: center;
        width: 400px;
        height: 85vh;
        display: block;
        background: #fff;
        padding-top: 3em;
        box-shadow: 0 0 12px #000000b6;
        border-radius: 14px;
        transition: .5s;
        cursor: pointer;
        z-index: 1;
        margin-top: 5%;
    }
    form input{
        width: 300px;
        height: 50px;
        color: #262626;
        border-bottom: 2px solid #e6e6e6e0;
        border-top: none;
        border-left: none;
        border-right: none;
        outline: none;
        background: transparent;
        margin-top: 2em;
        font-size: 18px;
        padding-left: 1em;
    }
    form h1{
        color: #119cff;
        margin-bottom: 0.02em;
    }
    form input[type="submit"]{
        background: #119cff;
        color: #fff;
        font-size: 20px;
        font-weight: bold;
        border-radius: 30px;
        text-align: center;
        margin-top: 2em;
        cursor: pointer;
    }
    form input[type="submit"]:hover{
        background: #046bb4;
    }
    form:hover{
    animation: none;
    transition: .5s;
}

    a {
        width: 50px;
        height: 50px;
        position: absolute;
        top: 0;
        left: 0;
        text-decoration: none;
    }
    form img{
        height: 80px;
    }
    </style>
</head>
<body>
<?php
session_start();

$validUsername = "mimoso";
$validPassword = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION["username"] = $username;
        print " <h1> <script> alert  ('Seja Bem vindo!.');</script></h1>";
        header("Location: NiceAdmin/index.php");
        
        exit;
    } else {
        
        print " <h1> <script> alert  ('Credenciais inválidas. Tente novamente.');</script></h1>";
    }
}
?>
    <a href="index.php">  <i class="bi-arrow-left"></i></a><br><br>
    
    <form  action="?page=salvar" method="POST">
        <img src="img/imag2.jpeg" alt="">
    <input  type="hidden" name="acao"  value=" editar "><br><br>
        <h1>Administrador</h1>
          <input  type="hidden" name="acao"  value=" editar "><br><br>
        <i class="bi bi-person-fill"></i>  <input type="text" placeholder="nome adm" name="username"><br>
        <i class="bi bi-key"></i>  <input type="password" placeholder="senha" name="password">
      <input type="submit" value="Entrar">
    
    </form>

    
</body>
</html>