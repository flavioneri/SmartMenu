 <?php
    $connect = mysqli_connect("localhost", "root", "", "smartmenu");
    $output = array();
    $nomes = "";

    $query = "SELECT * FROM `pratos`";

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



 


