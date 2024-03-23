<?php
$host = 'localhost'; // Database server (e.g., 'localhost' or IP address)
$dbname = 'product_details'; // Name of your database
$username = 'root'; // Database username
$password = ''; // Database password

$db = new mysqli($host, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}




?>

