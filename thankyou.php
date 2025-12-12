<?php
// Database connection
$conn = new mysqli("localhost", "tsewangg_pantryuser", "smd19Tse@2001", "tsewangg_projectpantry");

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if order_id exists
if (!isset($_GET['order_id']) || empty($_GET['order_id'])) {
    die("Invalid order ID.");
}

$order_id = intval($_GET['order_id']); // sanitize input

// Use prepared statement for safety
$stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->bind_param("i", $order_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Order not found.");
}

$order = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .receipt-container {
            width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        h2 { text-align: center; }
        p { font-size: 16px; }
        button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>

<div class="receipt-container">
    <h2>Order Receipt</h2>

    <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
    <p><strong>Household Size:</strong> <?php echo htmlspecialchars($order['household_size']); ?></p>
    <p><strong>Food Items:</strong>
    <?= empty($order['food_items']) ? "None selected" : $order['food_items']; ?>
    </p>
    <p><strong>Toiletries:</strong>
    <?= empty($order['toiletries']) ? "None selected" : $order['toiletries']; ?>
    </p>

    <button onclick="window.print()">Print Receipt</button>
</div>

</body>
</html>
