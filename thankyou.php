<?php
$conn = new mysqli("localhost", "tsewangg_pantryuser", "smd19Tse@2001", "tsewangg_projectpantry");

$order_id = $_GET['order_id'];

$sql = "SELECT * FROM orders WHERE id = $order_id";
$result = $conn->query($sql);
$order = $result->fetch_assoc();
?>

<h2>Order Receipt</h2>
<p><strong>Name:</strong> <?php echo $order['name']; ?></p>
<p><strong>Household Size:</strong> <?php echo $order['household_size']; ?></p>
<p><strong>Food Items:</strong> <?php echo $order['food_items']; ?></p>
<p><strong>Toiletries:</strong> <?php echo $order['toiletry_items']; ?></p>

<button onclick="window.print()">Print Receipt</button>
