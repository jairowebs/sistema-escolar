<?php

$sName = "localhost:3307";
$uName = "root";
$pass = "";
$db_name = "smsdb";

try {
	$conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOExeption $e) {
	echo "Connection failed: " . $e->getMessage();
	exit;
}