<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone_number = $_POST['phone_number'];

    $stmt = $pdo->prepare("INSERT INTO users (name, age, phone_number) VALUES (?, ?, ?)");

    try {
        $stmt->execute([$name, $age, $phone_number]);
        echo "User data inserted successfully.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>User Information</h1>
        <div class="message">
            <?php if (isset($message)): ?>
                <?php if (strpos($message, "Error") !== false): ?>
                    <div class="error">
                        <?php echo $message; ?>
                    </div>
                <?php else: ?>
                    <div class="success">
                        <?php echo $message; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

