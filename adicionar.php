<?php
    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();
    if(isset($_GET['nome_prato'])) $nome_prato = $_GET['nome_prato'];
    else die();
    if(isset($_GET['preco_prato'])) $preco_prato = $_GET['preco_prato'];
    else die();
    if(isset($_GET['desc_prato'])) $desc_prato = $_GET['desc_prato'];
    else die(); 
    
    $connect = mysqli_connect("localhost", "root", "", "smartmenu");

    if($type==1) $table_name = "entradas";
    else if($type==2) $table_name = "sopas";
    else if($type==3) $table_name = "pp";
    else if($type==4) $table_name = "sobremesas";
    else die();


    $query = "INSERT INTO `".$table_name."` (`ref_prato`, `nome`, `preco`, `descricao`) VALUES (NULL, '".$nome_prato."', '".$preco_prato."', '".$desc_prato."')";
    
    $result = mysqli_query($connect, $query);
    ?>