<?php
// Start Session and Check for Employee Access
session_start();
if (!isset($_SESSION['employee_logged_in']) || $_SESSION['employee_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}

// Load Orders from JSON File
$orders = file_exists('orders.json') ? json_decode(file_get_contents('orders.json'), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Orders</title>
    <style>
        .order-container {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>All Orders</h2>

    <!-- Display Orders -->
    <?php if (empty($orders)): ?>
        <p>No orders have been submitted yet.</p>
    <?php else: ?>
        <?php foreach ($orders as $index => $order): ?>
            <div class="order-container">
                <h4>Order #<?php echo $index + 1; ?></h4>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
                <p><strong>Household Size:</strong> <?php echo htmlspecialchars($order['household_size']); ?></p>
                <p><strong>Time:</strong> <?php echo htmlspecialchars($order['timestamp']); ?></p>

                <strong>Food Items:</strong>
                <ul>
                    <?php foreach ($order['food'] as $item): ?>
                        <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>

                <strong>Toiletries:</strong>
                <ul>
                    <?php foreach ($order['toiletries'] as $item): ?>
                        <li><?php echo htmlspecialchars($item); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

    <!-- Navigation Links -->
    <a href="store.php">Back to Store</a> |
    <a href="logout.php">Logout</a>
</body>
</html>
