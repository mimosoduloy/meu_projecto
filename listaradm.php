



<link href="css2/bootstrap.min.css" rel="stylesheet" >


    <Center><h1>Listando os cadáveis</h1></center><br>
    <form action="" method="GET">
    <label for="search">Pesquisar:</label>
    <input type="text" id="search" name="search">
    <button type="submit">Buscar</button>
</form>
            <div class="tabela">  
                <?php
                 include("conecao.php");

                $sql = "select * from cadavel c join campa_cem ca on c.cemiterio=ca.id_ca_cem
                join quarteirao_cem q on ca.cem=q.id_qt_cem join cem on q.cemiterio=id_cem"; 
                $busca = $con -> query ($sql);
                $qtd = $busca ->num_rows; 
                
                
                    if($qtd > 0){ 
                        print"<table class='table table-hover table-striped table-bordered border:1 '>";
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
                        print" <th> Accoes </th> ";
                
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
                           print "<td>
                           <button onclick=\"location.href='editar.php?editar&id=".$row->id."';\" class='btn btn-success'>Editar </button>
                           <button onclick =\"if (confirm('Tem certeza que deseja excluír?')){ location.href='?action=delete&id=".$row->id."';}
                           else{false;}\" class='btn btn-danger'> Excluir </button>
                           </td>";
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
      


<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "memories";

// Estabelece a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se foi submetido um termo de busca
if(isset($_GET['search'])) {
    $search = $_GET['search'];

    // Prepara a consulta SQL
    $sql = "SELECT * FROM cadavel WHERE nome LIKE '%$search%'";

    // Executa a consulta SQL
    $result = $conn->query($sql);

    // Exibe os resultados da busca
    if ($result->num_rows > 0) {
        echo "<h2>Resultados da busca:</h2>";
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>Nome: " . $row["nome"] . " Id:".$row["id"]."</li>";
        }
        echo "</ul>";
    } else {
        echo "Nenhuma memória encontrada para '$search'.";
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>