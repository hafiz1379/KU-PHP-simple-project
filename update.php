<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];

    $stmt = $pdo->prepare("UPDATE users SET name = ?, age = ?, phone_number = ? WHERE id = ?");

    try {
        $stmt->execute([$name, $age, $phone_number, $id]);
        echo "User data updated successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>

