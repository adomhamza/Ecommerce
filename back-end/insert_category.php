<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli('localhost', 'root', '', 'ecomm');

// Check connection
if (false === $mysqli) {
    die('ERROR: Could not connect. '.$mysqli->connect_error);
}

// Escape user inputs for security
$category_name = $mysqli->real_escape_string($_REQUEST['category_name']);
//$last_name = $mysqli->real_escape_string($_REQUEST['last_name']);
//$email = $mysqli->real_escape_string($_REQUEST['email']);

// Attempt insert query execution
$id = $_SESSION['userlogin']["admin_id"];
$sql = "INSERT INTO category (category_name,createdBy,updatedBy) VALUES ('{$category_name}', '{$id}' , '{$id}')";
if (true === $mysqli->query($sql)) {
    echo 'Records inserted successfully.';
    
} else {
    echo "ERROR: Could not able to execute {$sql}. ".$mysqli->error;
}

// Close connection
//$mysqli->close();
