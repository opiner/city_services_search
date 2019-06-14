<?php
session_start();

require_once('../dal/database.php');
$data = json_decode($_POST["data"]);

$db = new Database();

$user = $db->getUserByEmail($data->email);
$getService = $db->getServiceproviderById($data->id);

?>



<textarea style="width:95%; height:60px" id="message">
I am  <?php  echo $user["fullName"]?>, I am seeking for your service, my phone Number is <?php  echo $user["phone"]?>.
</textarea><br /><br />
<h3>To The Customer care Representative:</h3>
<strong style="color:blue">  <?php echo $getService["companyName"]?></strong><br /><br />

<input type="hidden" id="companyid" value="<?php  echo $data->id?>" />
<input type="hidden" id="userid" value="<?php  echo $user["userId"]?>" />

<input type="submit" value="Submit" style="width:100px; height:34px" onclick="conc()" />



