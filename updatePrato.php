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

    
    $ref_prato = $_GET['ref'];
    $query = "UPDATE * FROM `".$table_name."` WHERE `ref_prato`=`".$ref_prato_click."`";
    $result = mysqli_query($connect, $query);


   
?>