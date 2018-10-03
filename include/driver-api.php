<?php	$host=$_SESSION["host"];
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	use PEAR2\Net\RouterOS;
	require_once 'Net_RouterOS/PEAR2_Net_RouterOS-1.0.0b6.phar';
	$util = new RouterOS\Util(
	$client = new RouterOS\Client($host, $username, $password)
	);