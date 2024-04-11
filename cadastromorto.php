<?php
include("conecao.php");
$sql = "select id_cem,nome_cem from cem";
$da = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_morto</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        * {
            font-family: 'Courier New', Courier, monospace;
        }

        main {
            min-height: 100vh;
        }

        form {
            text-align: center;
            max-width: 800px;
            margin: 3em auto;
            padding: 2em;
            background: #fff;
            box-shadow: 0 0 12px #000000b6;
            border-radius: 14px;
            transition: .5s;
        }

        form input,
        form select {
            width: 100%;
            max-width: 300px;
            height: 50px;
            color: #262626;
            border: 2px solid #e6e6e6e0;
            outline: none;
            background: transparent;
            margin: 1em auto;
            font-size: 18px;
            padding-left: 1em;
        }

        form h1 {
            color: #119cff;
            margin-bottom: 1em;
        }

        form button[type="submit"] {
            width: 100%;
            max-width: 200px;
            background: #119cff;
            color: #fff;
            font-size: 20px;
            font-weight: bold;
            border-radius: 30px;
            text-align: center;
            margin: 2em auto;
            cursor: pointer;
            display: block;
        }

        form button[type="submit"]:hover {
            background: #046bb4;
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
<body style="background-color: white;">

    <a href="index.php"><i class="bi-arrow-left"></i></a>
    <form method="POST" class="form" enctype="multipart/form-data">
        <input type="hidden" name="acao" value="cadastrar">
        <img src="img/imag2.jpeg" alt="">
        <h1>Faça o seu cadastro</h1>
        <input type="text" placeholder="Nome" name="nome" required class="form-control">
        <input type="text" placeholder="BI" name="bi" required class="form-control">
        <input type="text" placeholder="Morada" name="morada" required class="form-control">
        
        <select name="sexo" id="sexo" class="form-control">
            <option value="">Gênero</option>
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
            <option value="Outro">Outro</option>
        </select>
        
        
        <select type="text" name="cemiterio" id="cem" class="form-control">
        <option disabled selected>Escolha o Cemitério</option>
            <?php
            foreach($da as $c){
            echo"<option value='$c[id_cem]'>$c[nome_cem]</option>";
        }
            ?>
        </select>

        <select id="quarte" class="form-control" name="qua">
     <option disabled selected>Escolha o quarteirão</option>
 </select>

        <select id="campa" class="form-control" required name="campa">
     <option disabled selected>Escolha a Campa</option>
 </select>
    
 <input type="time" name="hora" required class="form-control">

 <input type="date" name="data_mort" required class="form-control">

 <input type="text" placeholder="Tell" name="tell" required class="form-control">
 
 
      
 
 <input type="file"  placeholder="Foto"  name="ft" >
       
       
     
        
        
       
        <button type="submit" name="CADASTRO_MORTO" class="btn btn-primary">Enviar</button>
    </form>


    <?php 

        if(isset($_POST['CADASTRO_MORTO'])):
            $nome= $_POST ["nome"];
            $morada= $_POST ["morada"];
            $tell= $_POST ["tell"];
            $cemiterio= $_POST ["campa"];
            $sexo= $_POST ["sexo"];
            $data_mort= $_POST ["data_mort"];
            $bi= $_POST ["bi"];
            $ft= $_POST ["ft"];
            $dh = date("Y-m-d"); 
            $hora = time();

            $sql = "select * from cadavel where bi='$bi'";
            $busca = $con->query($sql);
            if($busca->num_rows>0){
                print"<script> alert ('Já existe alguém cadastrado com esse BI');</script>"; 
            }else{
            $sql= "INSERT INTO cadavel (nome, morada, tell,cemiterio, sexo, data_mort, bi, ft, dh, hora)
            VALUES ('{$nome}', '{$morada}', '{$tell}', '{$cemiterio}', '{$sexo}', '{$data_mort}','{$bi}','{$ft}','{$dh}','{$hora}')";
            $cad= $con->query($sql);
            if($cad){
                print "<script>alert  ('Cadastrado com sucesso');</script>";
                print"<script>location.href='cadastromorto.php'; </script>";
            }else{
                print"<script> alert ('Nâo foi possível Cadastrar');</script>";
            }
        }
        endif;
    
    ?>
  <script src="js/verificar.js"></script>
  
</body>
</html>