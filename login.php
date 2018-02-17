<?php
include 'includes/header.php';
include 'includes/login.inc.php';
?>


              
              
	<div class="loginBox">
        
        <h1 align="center">
	 
	       <?php
	         if (isset($message)) {
	       	  echo $message;
	          }
	        ?>	        	
	    </h1>

      
	    <h2>Login</h2>

	     <form method="POST">
	       <img src="public/img/user.png" class="user">
	  	   <input  type="text" name="uid" placeholder="USER NAME...">
	  	   <input  type="password" name="pwd" placeholder="PASSWORD....">

	  	   <button type="submit" name="login" class="btn btn-default">Login</button>
	     </form>
    </div>


	    


</body>
</html>