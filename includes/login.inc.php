<?php
$message = "";
try{



if (isset($_POST['login'])) {
     
    if (empty($_POST['uid']) || empty($_POST['pwd'])) {
     	  $message = "<label class='error'>All Fields Are Required</label>";
     } else{

	$qry = "SELECT * FROM $table WHERE uid=:uid AND pwd=:pwd";
	$stmt = $conn->prepare($qry);

	$stmt->execute(array(
           ":uid" => $_POST['uid'],
           ":pwd" => $_POST['pwd']
		));

	$count = $stmt ->rowCount();

	if ($count > 0) {
		$_SESSION['uid'] = $_POST['uid'];
		$_SESSION['last_login_timestamp'] = time();
		
		header("Location: index.php?login=success");
	}else{
		$message = "<label class='error'>Wrong Data</label>";
	}
}
}


}

catch(PDOEXCEPTION $error){
	$error->getMessage();
}