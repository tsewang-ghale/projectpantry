<?php
echo "<h2>All Orders</h2>";

if (file_exists("orders.txt")) {
    // Get the file contents and sanitize output
    $orders = file_get_contents("orders.txt");
    echo "<pre>" . htmlspecialchars($orders) . "</pre>";
} else {
    echo "<p>No orders yet.</p>";
}
?>
