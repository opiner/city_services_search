<?php
session_start();
if(!isset($_SESSION["email"])){
header("location:index.php");
die;	
}

require_once("dal/database.php");
$db = new Database();
$comp = $db->getServiceproviderByEmail($_SESSION["email"]);

$compMessages = $db->getServiceproviderByMessagesById($comp['id']);

function getUser($one)
{
	$db = new Database();
	$user = $db->getUserBYId($one);
	return $user["fullName"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City service finder</title>
<link rel="stylesheet" type="text/css" href="stylesheets/dashboard.css" />
</head>

<body>
	<div id="wrapper">
    	<div id="banner">
        	<ul>
            
            <li><a href="logout.php"> Logout </a></li>
            <li><a href="javascript:void(0)"> Advertise </a></li>
            <li><a href="javascript:void(0)"> view map</a></li>
            <li><a href="index.php" style="color:blue">Uyo Service Finder</a></li>
            </ul>
        </div>
        
        
        <div id="flexcon">
        <div class="card1">
        <h1 style="color:skylightblue">
        
        <?php echo $comp["CompanyName"]?>
        
		</h1>
		<h3>Messages from  custormers</h3>
        <img src="img/mail.png" style="width:60%; margin-top:15px;"/>
        
        <?php foreach ($compMessages as $one)
		{?>
		
        <div style="border:1px solid #ddd;  margin-bottom:10px; margin-top:10px; padding:1%"">
                <strong> From :</strong> <?php echo getUser($one['userid']) ?><br />
                <strong>Message :</strong> <?php echo $one['message']?><br />
                <strong>Date :</strong> <?php echo $one['date']?>
                </div>
				
			<?php }
			?>
			
                        </div>
            
            <div class="card2">
            <h2>Company's Profile</h2>
           <ol>
           <li><strong>Company Name: <br /></strong><?php echo $comp["companyName"]?></li>
            <li><strong>Address: <br /></strong><?php echo $comp["address"]?></li>
           
           <li><strong>Phone: </strong><br /><?php echo $comp["phone"]?></li>
           <li><strong>Email: </strong><br /><?php echo $comp["email"]?></li>
           <li><strong>Service Category: </strong><br /><?php echo $comp["category"]?></li>
            <li><strong>Our services: </strong><br /><?php echo $comp["description"]?></li>
           </ol>
           </div>
         
          
            
        
        </div>
        
        
        
        
    </div>
</body>
</html>



