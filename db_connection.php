<?php
$host = "localhost";
$port = "5432";
$dbname = "user_information";
$user = "postgres";
$password = "hafiz1379";

$dsn = "pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected to the database successfully.";  // You can remove this line after testing
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
