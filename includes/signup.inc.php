<?php
include './conf/db_conn.php';



if (isset($_POST['signup'])) {
	
	if (!empty($_POST['uid']) && !empty($_POST['pwd'])) {
		$qry = "INSERT INTO $table (uid, pwd) VALUES (:uid, :pwd)";
	    $stmt = $conn->prepare($qry);
	     $result = $stmt->execute(array(
		   ":uid" => $_POST['uid'],
           ":pwd" => $_POST['pwd']
		));

	   if ($result) {
	     	echo "<h1 align='center'>sign up success</h1>";
	     }  else{
	     	echo "error";
	     }
	}else{
          echo "All Fields are Required";
	}
}
