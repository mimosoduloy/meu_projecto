<?php
        include("conecao.php");
        switch (@$_REQUEST["page"]) {
            case 'novo':
                include ("cadastromorto.php");
                break;
            case 'listar':
                include ("listarcadavel.php");
                break;
            case "salvar":
                include("salvarcadavel.php");
                break;
            case "editar": 
                include("editar.php");
                break;
            default: 
                break;
        }
    ?>