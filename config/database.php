<?
define('DB_HOST', 'localhost');
define('DB_USER', 'gramm');
define('DB_PASS', 'password');
define('DB_NAME', 'g-billing');


// Connections
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check Connections
if($conn->connect_error) {
   die('Connection Terminated' . $conn->connect_error);
}

