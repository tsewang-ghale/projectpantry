<?php
session_start();
if (!isset($_SESSION['employee_logged_in']) || $_SESSION['employee_logged_in'] !== true) {
    header('Location: login.php');
    exit();
}
?>

<?php
$orders = file_exists('orders.json') ? json_decode(file_get_contents('orders.json'), true) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Orders</title>
</head>
<body>
    <h2>All Orders</h2>
    <?php if (empty($orders)): ?>
        <p>No orders have been submitted yet.</p>
    <?php else: ?>
        <?php foreach ($orders as $index => $order): ?>
            <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;">
                <h4>Order #<?php echo $index + 1; ?></h4>
                <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
                <p><strong>Household Size:</strong> <?php echo htmlspecialchars($order['household_size']); ?></p>
                <p><strong>Time:</strong> <?php echo htmlspecialchars($order['timestamp']); ?></p>

                <strong>Food Items:</strong>
                <ul>
                    <?php foreach ($order['food'] as $item) { echo "<li>" . htmlspecialchars($item) . "</li>"; } ?>
                </ul>

                <strong>Toiletries:</strong>
                <ul>
                    <?php foreach ($order['toiletries'] as $item) { echo "<li>" . htmlspecialchars($item) . "</li>"; } ?>
                </ul>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
<a href="logout.php">Logout</a>

</body>
</html>
