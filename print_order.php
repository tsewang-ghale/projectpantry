<?php
session_start(); // Start the session to retrieve the stored order

// Check if an order has been stored in the session
if (!isset($_SESSION['order'])) {
    echo "No order details available.";
    exit();
}

$order = $_SESSION['order'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
        }
        .order-receipt {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #f9f9f9;
        }
        .order-receipt p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Your Order Receipt</h2>

        <div class="order-receipt">
            <p><strong>Date and Time:</strong> <?php echo htmlspecialchars($order['date_time']); ?></p>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($order['name']); ?></p>

            <p><strong>Food Items:</strong></p>
            <ul>
                <?php foreach ($order['food_items'] as $food) { ?>
                    <li><?php echo htmlspecialchars($food); ?></li>
                <?php } ?>
            </ul>

            <p><strong>Toiletries:</strong></p>
            <ul>
                <?php foreach ($order['toiletries'] as $toiletry) { ?>
                    <li><?php echo htmlspecialchars($toiletry); ?></li>
                <?php } ?>
            </ul>
        </div>

        <!-- Print Button -->
        <div class="text-center">
            <button class="btn btn-success" onclick="window.print()">Print Order</button>
        </div>
    </div>
</body>
</html>

<?php
// Clear the order from the session after printing
session_unset();
?>
