<?php
include "connectiondb.php";

$query = "SELECT * FROM admin";

$rs$dbhandle->query($query);

while($row=$rs->fetch_assoc()){
	$data[]=$row;

}

print json_encode($data);

