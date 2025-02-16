<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitted"])) {
    // Validate name input
    if (!isset($_POST["name"]) || empty(trim($_POST["name"]))) {
        die("Error: Name is required.");
    }

    $name = htmlspecialchars(trim($_POST["name"]));
    $food_items = isset($_POST["food"]) ? $_POST["food"] : [];
    $toiletries = isset($_POST["toiletries"]) ? $_POST["toiletries"] : [];

    // Store order details
    $order_details = "Name: $name\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\n\n";
    file_put_contents("orders.txt", $order_details, FILE_APPEND);

    // Redirect to Thank You Page
    header("Location: thankyou.html");
    exit();
}
?>
