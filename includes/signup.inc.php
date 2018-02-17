<?php
include './conf/db_conn.php';

$message = "";

if (isset($_POST['signup'])) {
	
	if (!empty($_POST['uid']) || !empty($_POST['pwd'])) {
		$qry = "INSERT INTO $table (uid, pwd) VALUES (:uid, :pwd)";
	    $stmt = $conn->prepare($qry);
	     $result = $stmt->execute(array(
		   ":uid" => $_POST['uid'],
           ":pwd" => $_POST['pwd']
		));

	   if ($result) {
	     	header("Location: login.php?signup=success");
	     }  else{
	     	echo "error";
	     }
	}else{
          $message = "All Fields are Required";
	}
}