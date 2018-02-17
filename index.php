<?php
include 'includes/header.php';


if (isset($_SESSION['uid'])) {
	 
	 if (time() - $_SESSION['last_login_timestamp'] > 900) // 900 = 15 * 60
	   {
	 	  
	 	  header("Location: login.php?autoLogout=success");
	 }else{
         
           
 	     $_SESSION['last_login_timestamp'] = time();?>

         <div class="container">
 	     <h1>WELCOME, <?php  echo $_SESSION['uid'] ?></h1>

 	     

 	     <h3 align="center">Home Page GOES HERE</h3>
         
          </div>
	    <?php }
	
         }else{
	      header("Location: login.php");
         }
        ?>

