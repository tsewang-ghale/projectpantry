<?php
// Session Check for Employee Access
session_start();
if (!isset($_SESSION['employee_logged_in']) || $_SESSION['employee_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// Process Order Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $household_size = $_POST['household_size'];
    $food = isset($_POST['food']) ? $_POST['food'] : [];
    $toiletries = isset($_POST['toiletries']) ? $_POST['toiletries'] : [];

    // Create Order Data
    $order = [
        'name' => $name,
        'household_size' => $household_size,
        'food' => $food,
        'toiletries' => $toiletries,
        'timestamp' => date("Y-m-d H:i:s")
    ];

    // Save Order to JSON File
    $orders = file_exists('orders.json') ? json_decode(file_get_contents('orders.json'), true) : [];
    $orders[] = $order;
    file_put_contents('orders.json', json_encode($orders, JSON_PRETTY_PRINT));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
</head>
<body>
    <h2>Order Confirmation</h2>
    
    <?php if (isset($order)): ?>
        <p>Thank you, <strong><?php echo htmlspecialchars($name); ?></strong>!</p>
        <p>Household Size: <?php echo htmlspecialchars($household_size); ?></p>

        <h3>Food Items:</h3>
        <ul>
            <?php foreach ($food as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>

        <h3>Toiletries:</h3>
        <ul>
            <?php foreach ($toiletries as $item): ?>
                <li><?php echo htmlspecialchars($item); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No order data received.</p>
    <?php endif; ?>

    <!-- Navigation Links -->
    <a href="store.php">Submit Another Order</a> |
    <a href="view_orders.php">View All Orders</a> |
    <a href="logout.php">Logout</a>
</body>
</html>
