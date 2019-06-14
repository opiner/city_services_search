<?php
require_once('../dal/database.php');
$data = json_decode($_POST["data"]);

$db = new  Database();

if($db->addUser($data)){
	echo "200";
}
else{
	echo "300";
}



?>