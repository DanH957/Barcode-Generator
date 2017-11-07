<?php 
session_start();
?>


<html>
    <head>
        <title>UPC-A - Barcode Generator</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="UPCA.js" >
		
		</script>
		
		
<link type="text/css" rel="stylesheet" href="style.css" />
<body>
</head>
<div class="main">
<div class="list">
<div class="header">
<img class="logo" src="logo.png" alt="Barcode Generator" />
    <header>
        
        <nav>
		<div class="searchbox" id="searchbox"> </div>
		
			
   
    
  
		</nav>
    </header>




         
    
    
   
        <div class="logout" id="logout"> <?php if(isset($_SESSION["Username"])) { ?> 
             
			  
			<span class='barcode'> <h3><pre>Barcode list:                                                                                                                               Welcome <?php echo $_SESSION["Username"]; ?>. Click here to <a href= ""onclick="logout()" title="Logout">Logout</a>. </h3> </span>
			<?php } ?>
            </div>
			
            
 </div>         
                    
				
               
				 
           
				 
				


				 <div id="Output">
				 <?php if(isset($_SESSION["Username"])) { ?> 
				 <script> createlist(0);
                  showsearch();
				 </script>
				 <?php } else {	 ?>
				  <div class="login-box">
			<div class="box-header">
			<h2>Log In</h2>
			</div>
                  <label for="name">Username </label>
				 <br/>
                 <input type="text" size="30"  name="name" id="name"  /></li>
				 <br/>
                 <label for="name">Password</label>
				 <br/>
                 <input type="password" size="30"  name="word" id="word"  /></li>
				 <br/>
                 <button type="submit" value = "LogIn" id="Login" onclick="login(document.getElementsByName('name')[0].value, document.getElementsByName('word')[0].value)"> Sign In </button>
                 </ul>
				  <?php  } ?>
  
</div>
</div>
		</div>		 
        
    
	
</body>
</html>
