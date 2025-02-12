<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitted"])) {
    $name = htmlspecialchars($_POST["name"]);
    $food_items = isset($_POST["food"]) ? $_POST["food"] : [];
    $toiletries = isset($_POST["toiletries"]) ? $_POST["toiletries"] : [];

    // Store order details (For simplicity, saving in a text file)
    $order_details = "Name: $name\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\n\n";
    file_put_contents("orders.txt", $order_details, FILE_APPEND);

    // Print Order for confirmation
    echo "<h2>Order Summary</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Food Items:</strong> " . implode(", ", $food_items) . "</p>";
    echo "<p><strong>Toiletries:</strong> " . implode(", ", $toiletries) . "</p>";

    // Redirect to Thank You Page
    header("Location: thankyou.html");
    exit();
}
?>
