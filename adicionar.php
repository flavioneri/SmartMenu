<?php
    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();
    if(isset($_GET['nome_prato'])) $nome_prato = $_GET['nome_prato'];
    else die();
    if(isset($_GET['preco_prato'])) $preco_prato = $_GET['preco_prato'];
    else die();
    if(isset($_GET['desc_prato'])) $desc_prato = $_GET['desc_prato'];
    else die(); 
    
 	include 'connectiondb.php';


    $query = "INSERT INTO menu ( nome, preco, descricao, categoria_id, estado) VALUES ('". $nome_prato . "','" . $preco_prato . "', '" . $desc_prato . "','" . $type . "', TRUE)";
    
    $result = mysqli_query($connect, $query);
    ?>
