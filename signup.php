<?php
include 'includes/header.php';
include 'includes/signup.inc.php';

?>

<div class="loginBox">

  
 <form method="POST">
    <h2>Sign up</h2>

	<input type="text" name="uid" placeholder="User name...">
	<input type="password" name="pwd" placeholder="Password....">

	<button type="submit" name="signup">Sign up</button>
	 
	 <hr>
	 <a href="login.php">Login</a>
 </form>

</div>
