<?php
session_start(); // Start the session

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitted"])) {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST["name"]);
    $household_size = htmlspecialchars($_POST["household_size"]);
    $food_items = isset($_POST["food"]) ? array_map('htmlspecialchars', $_POST["food"]) : [];
    $toiletries = isset($_POST["toiletries"]) ? array_map('htmlspecialchars', $_POST["toiletries"]) : [];

    // Basic validation
    if (empty($name)) {
        echo "Name is required.";
        exit();
    }

    // Save the order details into the session
    $_SESSION['order'] = [
        'name' => $name,
        'household_size' => $household_size,
        'food_items' => $food_items,
        'toiletries' => $toiletries,
        'date_time' => date("Y-m-d H:i:s")
    ];

    // Store the order details in the orders_log.txt file (append mode)
    $order_details = "Name: $name\nHousehold Size: $household_size\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\nDate: " . date("Y-m-d H:i:s") . "\n\n";

    // Append to a log file
    file_put_contents("orders_log.txt", $order_details, FILE_APPEND | LOCK_EX);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5 text-center">
        <h1 class="text-success">Thank You for Your Order!</h1>
        <p class="mt-3">Your order has been successfully submitted. We will process it shortly.</p>
        <a href="index.php" class="btn btn-primary mt-4">Place Another Order</a>
       
    </div>
</body>
</html>
