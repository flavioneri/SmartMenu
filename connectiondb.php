<?php
	
    if( !( isset($type) || isset($password) ) ) {
    	echo "DBconnection has died!!!" ;
    	die();
    }
        
	$db_user = "root";
	$db_user_pass = "";
	$db_host = "localhost";
	$db_name = "smartmenu2";
	
	
    $connect = mysqli_connect($db_host, $db_user, $db_user_pass, $db_name);
    
?>



