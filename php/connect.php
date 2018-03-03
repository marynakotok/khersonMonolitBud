<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "commentmonolit";

$connect = mysqli_connect($servername, $username, $password, $dbname);

if (!$connect)
{
	die("Connection failed: ".mysql_connect_error());
}

?>