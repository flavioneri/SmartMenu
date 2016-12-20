<?php

    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();

    if(isset($_GET['id'])) $comentarioid = $_GET['id'];
    else die();

	if(isset($_GET['estado'])) $estado = $_GET['estado'];
    else die();

	include 'connectiondb.php';
	
    $output = array();
    
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
    
    $query = "UPDATE comentario SET estado = " . $estado . " WHERE id = " . $comentarioid;
    $result = mysqli_query($connect, $query);
    
?>



