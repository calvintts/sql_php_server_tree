<?php
//directory constants
define("PRIVATE_PATH",dirname(__FILE__));
define("PROJECT_PATH",dirname(PRIVATE_PATH));
define("PUBLIC_PATH",PROJECT_PATH.'/public');
define("SHARED_PATH",PRIVATE_PATH.'/shared');
require_once('functions.php');

//find the root urldecode
$public_end = strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
$doc_root = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WWW_ROOT",$doc_root);

require_once('functions.php');


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "map";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = "CREATE TABLE Map (
// id INT AUTO_INCREMENT PRIMARY KEY,
// lat FLOAT,
// lng FLOAT,
// title VARCHAR(2000),
// dist INT,
// description TEXT
// )";
//
// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

echo "Connected successfully";
?>
