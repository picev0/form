<?php
function db_connect(){
	$host = "localhost";
	$dbname = "****";
	$username= "****";
	$passwd = "****";
	$mysqli = new mysqli($host, $username, $passwd, $dbname);
	
	//接続チェック
	if($mysqli->connect_error){
		echo $mysqli->connect_error;
		exit();
	}else{
		$mysqli->set_charset("UTF-8");
	}
	return $mysqli;
}
	
?>