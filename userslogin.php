<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City service provider</title>
</head>
<link rel="stylesheet" type="text/css" href="stylesheets/register.css">

</head>
<body>

	<div id="wrapper">
		<div id="header">
		
		<ul>
		<li><a href="index.php#career" >Careers</a></li>
		<li><a href="register.php">Register</a></li>
		<li><a href="index.php#about">About Us</a></li>
		<li><a href="index.php">Home</a></li>
		
		</ul>
			
		</div><!--HEADER ENDS HERE-->
        
        
       
         
        <div id="login" style="font-family:'bold'">
        <strong class="one" style="border:none; color:blue">Service seekers login</strong><br /><br />
        
        <input type="text" placeholder="Email" id="email"  class="one"/>
        
        <input type="password" placeholder="Password" id="password" class="one" />
        
        <input type="submit"  class="inp" value="Login"  id="log"/><br />
        
        <span id="err" style="margin-left:5%; margin-top:10px"></span>
        
        </div>
         
        
		
        <div id="login2" style="font-family:'bold'; display:none">
        <strong class="one" style="border:none; color:orange">Service Providers login</strong><br /><br />
        
        <input type="text" placeholder="Email" id="email2"  class="one"/>
        
        <input type="password" placeholder="Password" class="one"  id="pass" />
        
        <input type="submit"  class="inp" value="Login" id="log2"/> 
        
          <span id="err2" style="margin-left:5%"></span>
        
        </div>
        
        
        
        <a href="javascript:void(0)" id="pr" onclick="showprovider()"> <div id="ser">Service Provider click here</div></a>
        
        <a href="javascript:void(0)" id="se" style="display:none" onclick="showseeker()"> <div id="ser" style="background:grey">Service seekers click here</div></a>
        
       
        
	
	</div><!--WRAPPER ENDS-->
    
    	
</body>
</html>


<script src="js/dist/login.js"></script>
<script>
function showprovider()
{
	document.getElementById("login").style.display = "none";
	document.getElementById("login2").style.display = "block";
	document.getElementById("se").style.display = "block";
	document.getElementById("pr").style.display = "none";
	
}

function showseeker()
{
	document.getElementById("login").style.display = "block";
	document.getElementById("login2").style.display = "none";
	document.getElementById("se").style.display = "none";
	document.getElementById("pr").style.display = "block";
}
</script>
    