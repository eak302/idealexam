<?php
	//include('connect.php');
	//connect();
	$_POST['action'] = 'login';
	
	if ($_POST['action'] == "login"){
		//connect();
		$_POST['username'] = 'eak302@gmail.com';
		$_POST['password'] = '028623112';
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$connect = mysql_connect("localhost","idealup_itest","passw0rd#");
		mysql_select_db("idealup_itest");
		
		$strSQL = "SELECT * FROM member WHERE username = '".$username."' and password = '".$password."'";
		$objQuery = mysql_query($strSQL);
		$objResult = mysql_fetch_array($objQuery);
		if(!$objResult)
		{
			echo "Username and Password Incorrect!";
			

		} else {
			$_SESSION["id"] = $objResult["id"];
			$_SESSION["username"] = $objResult["username"];
			$arrReturn['username'] = $objResult["username"];
			session_write_close();
		}
		
		
		$arrReturn = array();
		
		$arrReturn['action'] = $_POST['action'];
		$arrReturn['username'] = $username;
		
		echo json_encode($arrReturn);
	}
?>