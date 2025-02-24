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

    // Save the order to the log file
