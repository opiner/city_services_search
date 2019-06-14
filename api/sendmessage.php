<?php
require_once('../dal/database.php');
$data = json_decode($_POST["data"]);

$db = new  Database();

$res =  $db->sendMessage($data);


if ($res == "2000"){?>
<br /><br />
<h2>Your Message has been sent</h2>

<button onclick="closemodal()" style="width:100px; margin-top:15px; height:36px">Close</button>
	
<?php } 
else{
}


?>