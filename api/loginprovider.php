<?php
session_start();
require_once('../dal/database.php');
$data = json_decode($_POST["data"]);
//print_r($data); die;

$db = new Database();
if($db->loginProvider($data)){
	$_SESSION['email'] = $data->email;
	echo "2000";
	
}
else{
echo "4000";	
}
?>