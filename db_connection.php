<?php
// Database connection details
$host = 'localhost'; // Your database host, often 'localhost' on local environments
$db_name = 'root'; // Replace with your database name
$db_user = 'alumconnect'; // Replace with your database username
$db_pass = ''; 

try {
    // Create a new PDO instance to connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_pass);
    // Set error mode to exception to handle errors gracefully
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If there is an error connecting to the database, print the error message
    echo 'Connection failed: ' . $e->getMessage();
    exit(); // Stop the script
}
?>
