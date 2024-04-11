<?php
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome= $_POST ["nome"];
        $bairro= $_POST ["bairro"];
        $tell= $_POST ["tell"];
        $campa= $_POST ["campa"];
        $avenida= $_POST ["avenida"];
        $cemiterio= $_POST ["cemiterio"];
        $sexo= $_POST ["sexo"];
        $data_nasc= $_POST ["data_nasc"];
        $bi= $_POST ["bi"];
       
        $dh = date("Y-m-d H:i:s");
    
       

        $sql= "INSERT INTO cadavel (nome, bairro, tell,campa, avenida, cemiterio,sexo, data_nasc, bi, dh)
         VALUES ('{$nome}', '{$bairro}', '{$tell}', '{$campa}', '{$avenida}', '{$cemiterio}','{$sexo}', '{$data_nasc}','{$bi}','{$dh}')";
        $busca= $con->query ($sql);
        if($busca == true){
            print "<script>alert  ('Cadastrado com sucesso');</script>";
            print"<script>location.href='?page=listar'; </script>";
        }else{
            print"<script> alert ('Nâo foi possível Cadastrar');</script>";
            print"<script> location.href='?page=listar' ; </script>";
        }
        
                break;
    case 'editar': 
        $nome= $_POST ["nome"];
        $bairro= $_POST ["bairro"];
        $tell= $_POST ["tell"];
        $campa= $_POST ["campa"];
        $avenida= $_POST ["avenida"];
        $cemiterio= $_POST ["cemiterio"];
        $sexo= $_POST ["sexo"];
        $bi= $_POST ["bi"];
        $data_nasc= $_POST ["data_nasc"];

        $dh = date("Y-m-d H:i:s");


        $sql = "UPDATE  cadavel SET
        nome = '{$nome}', 
        bairro = '{$bairro}',
        tell = '{$tell}',
        campa= '{$campa}',
        avenida = '{$avenida}',
        cemiterio = '{$cemiterio}',
        sexo = '{$sexo}',
        data_nasc = '{$data_nasc}',
        bi = '{$bi}'
  
               WHERE 
           id = ".$_REQUEST["id"];
           $busca= $con->query ($sql);

               if($busca == true){
                print "<script>alert  ('Editado com sucesso');</script>";
                print"<script>location.href='?page=listar'; </script>";
            }else{
                print"<script> alert ('Nâo foi possível Editar');</script>";
                print"<script> location.href='?page=listar' ; </script>";
            }
                break;
              
    case 'excluir':
      
        $sql = "DELETE FROM  cadavel WHERE id=".$_REQUEST ["id"];
        $busca= $con->query ($sql);

        if($busca == true){
         print "<script>alert  ('Excluído com sucesso');</script>";
         print"<script>location.href='?page=listar'; </script>";
     }else{
         print"<script> alert ('Nâo foi possível Excluír');</script>";
         print"<script> location.href='?page=lista
          ; </script>";
     }
         break;        
        break;
            
    default:
        # code...
        break;
}
?>