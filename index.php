<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Service Provider</title>


<link rel="stylesheet" type="text/css" href="stylesheets/style.css">




</head>
<body>
    <div id="wrapper">
    <div id="header">
    
    <ul>
    <li> <a href="userslogin.php">Login</a></li>
    <li>  <a href="register.php">Register</a></li>
    <li> <a href="#">About us</a></li>
    <li> <a href="index.php">Home</a></li>
    
    
    </ul>
    </div><!--HEADER ENDS HERE-->
    
    <div id="widescreen">
        <p id="finds">Calabar Service Finder</p>
        <p id="opens">Providing fast and convinient way to search  for service providers</p>
			<br>
            <input type="text" class="search" id="search"   onfocus="searchStart()" onkeyup="cj()"  placeholder="Search for service ....">
    
     <div id="options">
            	
            	<ul class="sss">
                <li> Select category below :</li>
                <li><a href="searchzone.php?category=co work space">Co Work Space</a></li>
                <li><a href="searchzone.php?category=Site Claiming">Site Claiming</a></li>
                <li><a href="searchzone.php?category=Software development">Software development</a></li>
                <li><a href="searchzone.php?category=Vehicle overhauling">Vehicle overhauling</a></li>
                
                </ul>
            </div>
			
		</div><!---WIDESCREEN ENDS-->
    
    
    
     <div id="about">
        		<h2 style="color:#066">Who are we,  what we do,  how it works</h2>
                <p style="color:#065">City service finder is a platform that help service seekers meet with service providers with ease. It is a simple platform
                that has the database of service seekers within the city of Calabar,uyo,Ikot Ekpene and environs. The location and other vital information of such services providers are 
                also included. A service seeking just types the service he is looking for in the search bar, list of providers will be presented as 
                a drop down, and the user selects the one of his/her choice. A form will be presented to the user to fill and get in contact with 
                the service provider</p>
        
        </div>
        
        
        <div id="cont">
                <div class="threes">
                	<h2 style="color:#069">Co-Working space</h2>
                       <img src="img/h.jpg"  class="img"/>
                </div>
               
               <div class="threes">
               	<h2 style="color:#069">Software development</h2>
                 <img src="img/f.jpg"  class="img"/>
                </div>
                
                <div class="threes">
                	<h2 style="color:#069">Vehicle Overhauling</h2>
                    <img src="img/car.jpg"  class="img"/>
                </div> 
                
                <div class="clear"></div>
        </div><!--CONT ENDS-->
        
        
        
        <div id="cont2">
                <div class="threes">
                	<h2 style="color:#069">Site Claiming </h2>
                     <img src="img/g.jpg"  class="img"/>
                </div>
               
               <div class="threes">
               	<h2 style="color:#069">Mapping</h2>
                     <img src="img/i.jpg"  class="img"/>
                </div>
                
                <div class="threes" id="career">
                <h2>We are hiring</h2>
                <p>City service finder is looking for applicants in the following areas: </p>
                <ul>
                <li>Marketers</li>
                <li>SEO experts</li>
                <li>Map Readers</li>
                <li>Back end developers</li>
                </ul>
               
                
                
              
                <p>Send your applications to <a href ="#" title="inforservice.php">infor@cityservice.com</a></p>
                
                </div> 
                <div class="clear"></div>
        </div><!--CONT2 ENDS
        
        
	
	</div><!--WRAPPAER ENDS -->
    
    
    <div id="footer">
    </div>
	
	
</body>
</html>


<script>
window.onload = function()
{
	localStorage.clear();
}
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
</script>
    
    
    
    
    

</body>
</html>