<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitted"])) {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST["name"]);
    $food_items = isset($_POST["food"]) ? array_map('htmlspecialchars', $_POST["food"]) : [];
    $toiletries = isset($_POST["toiletries"]) ? array_map('htmlspecialchars', $_POST["toiletries"]) : [];

    // Store order details (For simplicity, saving in a text file)
    $order_details = "Name: $name\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\n\n";

    // Ensure the file is written properly
    if (file_put_contents("orders.txt", $order_details, FILE_APPEND) === false) {
        echo "There was an error saving your order.";
        exit();
    }

    // Redirect to Thank You Page (do this before any output)
    header("Location: thankyou.html");
    exit();
}
?>
