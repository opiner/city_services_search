<?php
session_start();
$cat = "";
require_once("dal/database.php");
$db = new Database();
$search ="";
if(isset($_GET["category"])){
	$cat = $_GET["category"];
	
	$search = $db->searchServicesByCategory($cat);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City service finder</title>
<link rel="stylesheet" type="text/css" href="stylesheets/searchzone.css" />
</head>

<body>
	<div id="wrapper">
    	<div id="banner">
        	<ul>
            
            <li><a href="logout.php"> Logout </a></li>
            <li><a href="javascript:void(0)"> Advertise </a></li>
            <li><a href="javascript:void(0)"> view map</a></li>
            <li><a href="index.php" style="color:blue">City Service Finder</a></li>
            </ul>
        </div>
        
        <div id="searchbarzone">
        	<input type="search"   id="searchbar"   onfocus="searchStart()" onkeyup="cj()"  placeholder="Search for service"/>
            
             <div id="options">
            	
            	<ul class="sss">
                <li> Select category below :</li>
                <li><a href="searchzone.php?category=Event management">Event management</a></li>
                <li><a href="searchzone.php?category=Site Claiming">Site Claiming</a></li>
                <li><a href="searchzone.php?category=Software development">Software development</a></li>
                <li><a href="searchzone.php?category=Vehicle overhauling">Vehicle overhauling</a></li>
                
                </ul>
            </div>
            
        </div>
        
        
        <div id="resultzone">
        <?php
		if($cat != ""){?>
        <h3> <?php echo $cat?> -- Services In Calabar </h3>
		<?php } ?>
        
        <?php
        if(($search != "") && (count($search) != 0) ){
			foreach($search as $one){?>
        <div class="repeat">
        <h3 style="color:green"><?php echo $one["companyName"]?></h3>
        <strong>What we do: </strong>
        <p style="font-family:'bold'; font-size:14px"><?php
		echo $one["description"];
		?></p>
        <strong>Phone: <?php echo $one["phone"]; ?> </strong><br />
        
         <strong>Address: <?php echo $one["address"]; ?> </strong><br />
        
        <button class="aut" onclick="contact('<?php echo $one['id'] ?>')"> Contact Us</button>
        </div>
     
		<?php } } ?>
        
        
        </div>
        
        
    </div>
</body>
</html>

<div id="modal"  style=" border:1px solid #ccc; width:400px; min-height:200px;   position:fixed; bottom:10px; right:4%;
 background:#fff; display:none; border-radius:10px; padding-top:7px; padding-left:1%;">


</div>

<script>
var apiWrapper = "http://localhost/calabar/";
var xhr = new XMLHttpRequest();
function searchStart()
{
	
		document.getElementById("options").style.display = "block";
	
}
function cj()
{    
	if(document.getElementById("search").value == 0){
	document.getElementById("options").style.display = "none";
	}
	else{
		document.getElementById("options").style.display = "block";
	}
}

function contact(id)
{
	document.getElementById("modal").style.display = "block";
	
	if(!localStorage.getItem("email"))
	{
		loginform();
		localStorage.setItem("idBeforeLogin", id);
	}
	else{
		var email = localStorage.getItem("email");
		contactform(id, email);
	}
	
	
	
}

function loginform()
{
	var xhr = new XMLHttpRequest();
	var url = 'http://localhost/calabar/api/loginform.php';
	xhr.open("POST", url, true);
	
	xhr.onreadystatechange = function()
	{
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById("modal").innerHTML = xhr.responseText;
		}
	}
	
	xhr.send();
}

function contactform(id, email)
{
	var xhr = new XMLHttpRequest();
	var url = 'http://localhost/calabar/api/contact.php';
	xhr.open("POST", url, true);
	var json = JSON.stringify({'id':id, 'email':email});
	var fd = new  FormData();
	fd.append('data',json);
	
	xhr.onreadystatechange = function()
	{
		if(xhr.readyState == 4 && xhr.status == 200){
			document.getElementById("modal").innerHTML = xhr.responseText;
		}
	}
	
	xhr.send(fd);
}

function logins()
{
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var id = localStorage.getItem("idBeforeLogin");

	var url = apiWrapper + 'api/loginusers.php';
	xhr.open("POST", url, true);
	var json = JSON.stringify({ "email": email, "password": password });
	var fd = new FormData();
	fd.append("data", json);
	xhr.onreadystatechange = function () {
		if (xhr.status == 200 && xhr.readyState == 4) {
			if (xhr.responseText == "2000") {
				localStorage.setItem("email", email);
				setTimeout(runs(id, email),1000);
			}
			if (xhr.responseText == "4000") {
				document.getElementById("error").innerHTML = "Wrong Credenstials";
				setTimeout(function(){ document.getElementById("error").innerHTML ="" },4000)
			}
		}
	};
	xhr.send(fd);
}

function runs(id, email)
{
	
	var url = apiWrapper + 'api/contact.php';
	xhr.open("POST", url, true);
	var json = JSON.stringify({ "email": email, "id":id });
	var fd = new FormData();
	fd.append("data", json);
	xhr.onreadystatechange = function () {
		if (xhr.status == 200 && xhr.readyState == 4) {
			
				document.getElementById("modal").innerHTML = xhr.responseText;	
		}
	};
	xhr.send(fd);
}

function conc()
{
	var userid = document.getElementById("userid").value;
	var companyid = document.getElementById("companyid").value;
	var message = document.getElementById("message").value;
	
	var url = apiWrapper + 'api/sendmessage.php';
	xhr.open("POST", url, true);
	var json = JSON.stringify({ "userid": userid, "companyid":companyid, "message":message});
	var fd = new FormData();
	fd.append("data", json);
	xhr.onreadystatechange = function () {
		if (xhr.status == 200 && xhr.readyState == 4) {
			document.getElementById("modal").innerHTML = xhr.responseText;	
		}
	};
	xhr.send(fd);
}

function closemodal()
{
	document.getElementById("modal").style.display = "none";
}
</script> 