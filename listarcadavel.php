<link href="css2/bootstrap.min.css" rel="stylesheet" >


    <center><h1>Listando os cadáveis</h1></center>

            <div class="tabela">  
                <?php
                 include("conecao.php");

                $sql = "SELECT * from cadavel c join campa_cem ca on c.cemiterio=ca.id_ca_cem
                join quarteirao_cem q on ca.cem=q.id_qt_cem join cem on q.cemiterio=id_cem";
                $busca = $con -> query ($sql);
                $qtd = $busca ->num_rows; 
                
                if($qtd > 0){ 
                    print"<table class='table table-hover table-striped table-bordered border:1 ' style=' width: 1300px; left:5px; position: relative' >";
                       print"<tr>";
                       print" <th> Id</th> ";  
                       print" <th> Nome</th> ";
                       print" <th> Nº Bi </th> ";
                       print" <th> Morada</th> ";
                       print" <th>  Sexo </th> ";
                       print" <th> Cemiterio </th> ";
                       print" <th> Quarterao </th> ";
                       print" <th> Campa </th> ";
                       print" <th> Hora do Enterro </th> ";
                       print" <th>  Data de Morte </th> ";
                       print" <th>Tell</th> ";
                       
                       
                       
                       
                       
                       print" <th> Horário do Cadastro</th> ";
                       print" <th> Foto </th> ";
                       
               
                       print"</tr>";
                       while ($row = $busca -> fetch_object ()){
                           print"<tr>";
                           print "<td >".$row->id." </td>";
                           print "<td>".$row->nome." </td>";
                           print "<td>".$row->bi." </td>";
                           print "<td>".$row->morada." </td>";
                           print "<td>".$row->sexo." </td>";
                           print "<td>".$row->nome_cem." </td>";
                           print "<td>".$row->quarteirao." </td>";
                           print "<td>".$row->campa." </td>";
                           print "<td>".$row->hora." </td>";
                           print "<td>".$row->data_mort." </td>";
                           print "<td>".$row->tell." </td>";
                           
                           print "<td>".$row->dh." </td>";
                           print "<td>".$row->ft." </td>";
                           
                           print"</tr>";
                   }
                   print"</table>";
                   }else {
                       print"<p >Nâo encontrou resultados!</p>";
                   }
                
                ?>


<?php 

    if(isset($_GET['action'] ) && $_GET['action'] === 'delete') {
        $sql = "DELETE FROM  cadavel WHERE id=".$_GET["id"];
            $busca= $con->query ($sql);

            if($busca == true){
            print "<script>alert  ('Excluído com sucesso');</script>";
            print"<script>location.href='listaradm.php'; </script>";
        }else{
            print"<script> alert ('Nâo foi possível Excluír');</script>";
            print"<script> location.href='listaradm.php ; </script>";
        }
    }

?>
      