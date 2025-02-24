<?php
echo "<h2>All Orders</h2>";

if (file_exists("orders.txt")) {
    // Get the file contents
    $orders = file_get_contents("orders.txt");

    // Split the orders into individual orders (assuming each order is separated by a double newline)
    $orderLines = explode("\n\n", $orders);

    // Check if there are any orders
    if (count($orderLines) > 0) {
        // Iterate through each order and format it into a receipt
        foreach ($orderLines as $order) {
            // Skip empty orders
            if (empty($order)) continue;

            // Split order details by newline (each line has a specific part like Date, Name, Food, etc.)
            $orderDetails = explode("\n", $order);

            // Display the order details in a receipt format
            echo "<div style='border: 1px solid #ddd; padding: 15px; margin-bottom: 20px;'>";
            
            // Iterate through each order detail and display it
            foreach ($orderDetails as $detail) {
                // Trim any extra spaces
                $detail = trim($detail);

                // Display the order detail (like Date, Name, Food Items, etc.)
                echo "<p><strong>" . htmlspecialchars($detail) . "</strong></p>";
            }

            // Close the order display div
            echo "</div>";
        }
    } else {
        echo "<p>No orders yet.</p>";
    }
} else {
    echo "<p>No orders yet.</p>";
}
?>
