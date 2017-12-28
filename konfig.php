<?php
/*
|--------------------------------------------------------------------------
| Configure Your Database Here
|--------------------------------------------------------------------------
*/

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "rumah_sakit";
        
    $base_url = "http://localhost/hospital/";
	
	if (mysql_connect($server,$user,$pass)){
		//echo ":)";
		mysql_select_db($dbname) or die("database not found");
	}else{
		echo ":(";
	}


	 
?>
