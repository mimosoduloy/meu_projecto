<?php
  include("conecao.php");
$sql= "SELECT *FROM cadavel WHERE id= ".$_REQUEST ["id"];
$busca=  $con -> query ($sql);
$row = $busca -> fetch_object(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro_morto</title>
    <link rel="stylesheet" href="stylle.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <style>
        *{
  font-family: 'Courier New', Courier, monospace;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  letter-spacing:1px ;

}
main{
  height: 200vh;
 
}

    
    form{
      text-align: center;
      width: 800px;
      height: 105vh;
      display: block;
      background: #fff;
      padding-top: 3em;
      box-shadow: 0 0 12px #000000b6;
      border-radius: 14px;
      transition: .5s;
      cursor: pointer;
   
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
      color:#119cff;
      margin-bottom: 1em;
  }
  form button[type="submit"]{
      background: #119cff;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      border-radius: 30px;
      text-align: center;
      margin-top: 2em;
      cursor: pointer;
  }
  form button[type="submit"]:hover{
      background: #046bb4;
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
form input [type="submit"]:hover{
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




  </style>
</head>
<body style="background-color: white;display: flex; display: flex;
justify-content: center;
align-items: center;
text-align: center; height: 120vh;">
    
    <a href="index.php">  <i class="bi-arrow-left"></i></a>
    <form action="" method="POST"  class="form">
    <input type="hidden" name="acao"  value="editar">
    <input type="hidden" name="id"  value=" <?php print $row-> id;?> ">

    <h1>Editar o seu cadastro</h1>
   <input type="text"      name="nome" value="<?php print $row-> nome;?>" required >
   <input type="text"     name="bi" value="<?php print $row-> bi;?>" required><br>
   <input type="text" name="morada" value="<?php print $row-> morada;?>" required>

  <select name="sexo" id="sexo" value="<?php print $row-> sexo;?>" >
        <option value="sexo">Genero</option>
        <option value="sexo">Masculino</option>
        <option value="sexo">Femenino</option>
        <option value="">Outro</option> 
    </select> <br><br><br>

    
    
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
 </select> <br><br>

 <select id="campa" class="form-control" required name="campa">
     <option disabled selected>Escolha a Campa</option>
 </select> 

 <input type="hora" name="hora"  value="<?php print $row-> hora;?>" required> <br>
    <input type="date" name="data_mort"  value="<?php print $row-> data_mort;?>" required> 
    
    <input type="text" placeholder="Tell"  name="tell" value="<?php print $row-> tell;?>" required><br>
    <input type="file" placeholder="foto"  name="ft" value="<?php print $row-> ft;?>" required> 
    

     <button type="submit" class="btn btn-primary" name="EDITAR_MORTO">Enviar</button>
    </form>


    <?php 
    
   

    if(isset($_POST['EDITAR_MORTO'])):

   

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


        $sql = "UPDATE  cadavel SET
        nome = '{$nome}', 
        morada = '{$morada}',
        tell = '{$tell}',
        cemiterio= '{$cemiterio}',
        sexo = '{$sexo}',        
        data_mort = '{$data_mort}',
        bi = '{$bi}',
        ft = '{$ft}',
        dh = '{$dh}',
        hora = '{$hora}', 
  
               WHERE 
           id = ".$_REQUEST["id"];
           $busca= $con->query ($sql);

           if($busca == true){
            print "<script>alert  ('Editado com sucesso');</script>";
            print"<script>location.href='listaradm.php'; </script>";
        }else{
            print"<script> alert ('Nâo foi possível Cadastrar');</script>";
        }
    endif;

?>

  
</body>
</html>