<?php
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

    // Save the order details into a file (orders.txt)
    $order_details = "Name: $name\nHousehold Size: $household_size\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\nDate: " . date("Y-m-d H:i:s") . "\n\n";

    // Store order details in the orders.txt file
    if (file_put_contents("orders.txt", $order_details, FILE_APPEND) === false) {
        echo "There was an error saving your order.";
        exit();
    }

    // Redirect to Thank You page, passing the order data
    header("Location: thankyou.html?name=" . urlencode($name) . "&food=" . urlencode(implode(", ", $food_items)) . "&toiletries=" . urlencode(implode(", ", $toiletries)) . "&household_size=" . urlencode($household_size));
    exit();
}
?>
