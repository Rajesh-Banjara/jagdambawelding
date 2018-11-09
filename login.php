<?php
include('database.php');
	session_start();
	$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : '';
	$userpassword= isset($_REQUEST['userpassword']) ? $_REQUEST['userpassword'] : '';
	$query = "SELECT user_email,userpassword FROM user where user_email='".$username."'and user_password='".$userpassword."'";
	$result = $conn->query($query);
		if($result->num_rows>0){
			while ($row = $result->fetch_assoc()) {
				$_SESSION['login']=$row;
				header("Location: http://localhost/online.php");
				
			}
		}

	
?>




