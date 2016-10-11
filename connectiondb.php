<?php
    if(isset($_GET['type'])) $type = $_GET['type'];
    else die();

    $connect = mysqli_connect("localhost", "root", "", "smartmenu");
    $output = array();
    $nomes = "";


    if($type==1) $table_name = "entradas";
    else if($type==2) $table_name = "sopas";
    else if($type==3) $table_name = "pp";
    else if($type==4) $table_name = "sobremesas";
    else die();


    $query = "SELECT * FROM `.$table_name.`";
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
    echo json_encode($output)
?>



