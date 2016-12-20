<?php
    if(isset($_GET['ref'])) $ref_prato = $_GET['ref'];
    else die();
    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();
    if(isset($_GET['nome_prato'])) $nome_prato = $_GET['nome_prato'];
    else die();
    if(isset($_GET['preco_prato'])) $preco_prato = $_GET['preco_prato'];
    else die();
    if(isset($_GET['desc_prato'])) $desc_prato = $_GET['desc_prato'];
    else die(); 

	include 'connectiondb.php';
	
    $query = "UPDATE menu SET nome = '".$nome_prato. "', preco = '".$preco_prato."', descricao = '".$desc_prato."' WHERE id = '" . $ref_prato . "';";
    $result = mysqli_query($connect, $query);
?>
