<?php


    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();
    if(isset($_GET['nome'])) $nome = $_GET['nome'];
    else die();
    if(isset($_GET['email'])) $email = $_GET['email'];
    else die();
    if(isset($_GET['id'])) $ref_prato = $_GET['id'];
    else die();
    if(isset($_GET['comentario'])) $comentario = $_GET['comentario'];
    else die(); 
    
    include 'connectiondb.php';

        
    $query = "INSERT INTO comentario (email, nome, descricao, menu_id) VALUES ('" . $email . "','" . $nome . "','" .  $comentario . "','" . $ref_prato . "')";
    
    print $query;
    
    
    $result = mysqli_query($connect, $query);



?>
