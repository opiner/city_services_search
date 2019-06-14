<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City service Provider</title>
</head>

<link rel="stylesheet" type="text/css" href="stylesheets/register.css">

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
    
    
    <div id="left">
        
        	<div id="form"><br />
            <h3 style="margin-left:5%;color:#069"     >Service seekers form</h3><br />
            <input type="text" id="fullName" placeholder="Full Name" class="one" />
                <input type="email" placeholder="Email" class="one" id="email" />
                <input type="text" placeholder="Phone"  class="one" id="phone"/>
                <input type="password" placeholder="Password" class="one" id="password" />
                <button id="regseek">Register</button>
                <span id="errorrep"></span>
                 <input type="submit"  value="If You are a service provider, please fill the form below" class="inp" style="background:grey; width:80%"/>
            </div>
            
            
            
            <div id="form"><br />
            <h3 style="margin-left:5%;color:#069">Service Providers form</h3><br />
            
            	<input type="text" id="companyname" placeholder="Company Name" class="one" />
                <input type="email" placeholder="Companies Email" class="one" id="email2" />
                <input type="text" placeholder="Company Phone"  class="one" id="phone2"/>
                <input type="text" placeholder="Company Address" id="address" class="one"  />
                <select class="one" id="cat" style="height:41px">
                <option>Service Category</option> 
                <option>Site Claiming</option>
                <option>Co-Working Space</option>
                <option>Software development</option>
                <option>Vehicle overhauling</option>
                </select>
                <textarea id="desc" placeholder="Company's description" class="one" rows="5"></textarea>
                <input type="password" placeholder="Password" class="one" id="password2" />
                
                 <button id="regserv" >Register</button>
                <span id="errorrep2"></span>
                 
            </div>
           
        </div>
        
		
        <div id="right">
        	<h2 style="color:#fff">Top Services</h2><br />

          <div class="hotsearch">
            	<h2 style="color:#069">Software development</h2> 
                 <img src="img/f.jpg"  class="img"/>
            </div>
            
            <div class="hotsearch">
            	<h2 style="color:#069">Site Claiming</h2>
            <img src="img/g.jpg"  class="img"/>
            </div>
            
            <div class="hotsearch">
           		 <h2 style="color:#069">Co Working Space</h2>
                 <img src="img/h.jpg"  class="img"/>
            </div>
            
        </div>
        
        <div class="clear"></div>        
        
        
       
        
       
        
	
	</div><!--ends wrapper-->
    
    
    <div id="footer">
    </div>
	
	
</body>
</html>


<script src="js/dist/register.js"></script>














</body>
</html>