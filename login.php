<?php
session_start();

// Hardcoded employee credentials (for demo purposes)
$employee_username = "employee";
$employee_password = "password123";

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication check
    if ($username === $employee_username && $password === $employee_password) {
        $_SESSION['employee_logged_in'] = true;
        header('Location: view_orders.php');
        exit();
    } else {
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Login</title>
</head>
<body>
    <h2>Employee Login</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="POST" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
        
    </form>
</body>
</html>
