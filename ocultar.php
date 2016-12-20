<?php
    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();
    if(isset($_GET['ref_prato'])) $ref_prato = $_GET['ref_prato'];
    else die();
 
 	include 'connectiondb.php';
 	   
 // Tipos de categorias
/*
	1 - Entradas
	2 - Sopas
	3 - Pratos
	4 - Sobremesas
*/


/*

Na tabela menu, o campo estado significa se o item do menu está ativo (true) ou não.

*/


    $query = "update menu set estado = 'false' WHERE id = " . $ref_prato;
    $result = mysqli_query($connect, $query);
    

   
?>
