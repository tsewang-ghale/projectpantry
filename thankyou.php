<?php
$conn = new mysqli("localhost", "tsewangg_pantryuser", "smd19Tse@2001", "tsewangg_projectpantry");

// Validate order ID
if (!isset($_GET['order_id']) || empty($_GET['order_id'])) {
    die("<h3>Error: No order ID provided.</h3>");
}

$order_id = intval($_GET['order_id']); // sanitize input

// Fetch order
$sql = "SELECT * FROM orders WHERE id = $order_id";
$result = $conn->query($sql);

if (!$result || $result->num_rows == 0) {
    die("<h3>Error: Order not found.</h3>");
}

$order = $result->fetch_assoc();
?>

<h2>Order Receipt</h2>
<p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>
<p><strong>Household Size:</strong> <?php echo htmlspecialchars($order['household_size']); ?></p>
<p><strong>Food Items:</strong> <?php echo htmlspecialchars($order['food_items']); ?></p>
<p><strong>Toiletries:</strong> <?php echo htmlspecialchars($order['toiletry_items']); ?></p>

<button onclick="window.print()">Print Receipt</button>
