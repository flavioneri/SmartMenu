<?php

    if(isset($_GET['type'])) $type = $_GET['type'];
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
    
    $query = "SELECT id,nome,descricao,preco FROM menu where estado is true and categoria_id = " . $type . " ;";
    $result = mysqli_query($connect, $query);
    
    $num_pratos = mysqli_num_rows($result);
    if($num_pratos > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
           // This will loop through each row, now use your loop here
            array_push($output,$row);
            
        }
    }
    echo json_encode($output);
?>



