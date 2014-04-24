<?php
	//mysql_connect("localhost","idealup_itest","passw0rd#") or die(mysql_error());
	//mysql_select_db("idealup_itest");
	function connect()
	{
			
	}
	function connect1()
	{
		$host = "localhost";
		$port = "";
		$db_user =  "idealup_itest";
		$db_pass = "passw0rd#";
		$db_name = "idealup_itest";

		$db_host = (!empty($port)) ? $host.":".$port : $host;
		if (@mysql_connect($db_host,$db_user,$db_pass)) {
			# code...
			$conserv = @mysql_select_db($db_name) or die ("SQL Error: <br>".mysql_error());
			//echo 'success';
		} else {
			die("SQL Error:<br>".mysql_error());
		}
	}
?>