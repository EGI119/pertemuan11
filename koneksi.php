<?php
// Define database connection parameters
$host = "localhost";
$username = "root";
$password = ""; // if you have a password, enter it here
$dbname = "crud_egi_4745";

try {
    $conn = new PDO("mysql:host=$host;dbname=$crud_egi_4745", $root, $;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}
?>