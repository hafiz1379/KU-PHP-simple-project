<?php
include 'db_connection.php';

// Check if the form was submitted for either updating or deleting
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update'])) {
        // Handle the update operation
        $id = $_POST['id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $phone_number = $_POST['phone_number'];

        // Check if any of the fields are empty
        if (empty($name) || empty($age) || empty($phone_number)) {
            echo "Error: Please fill in all fields.";
        } else {
            // Prepare the update query
            $stmt = $pdo->prepare("UPDATE users SET name = ?, age = ?, phone_number = ? WHERE id = ?");

            try {
                // Execute the query
                $stmt->execute([$name, $age, $phone_number, $id]);
                echo "User data updated successfully.";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
    } elseif (isset($_POST['delete'])) {
        // Handle the delete operation
        $id = $_POST['id'];

        // Prepare the delete query
        $stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");

        try {
            // Execute the query
            $stmt->execute([$id]);
            echo "User data deleted successfully.";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

// Query the database to get the user information
$query = $pdo->query("SELECT * FROM users");
$users = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information</title>
</head>
<body>
    <h1>User Information</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td>
                <form action="display_users.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <input type="text" name="name" value="<?= $user['name']; ?>">
            </td>
            <td>
                    <input type="number" name="age" value="<?= $user['age']; ?>">
            </td>
            <td>
                    <input type="text" name="phone_number" value="<?= $user['phone_number']; ?>">
            </td>
            <td>
                <input type="submit" name="update" value="Update">
                </form>
                <form action="display_users.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <input type="submit" name="delete" value="Delete">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
