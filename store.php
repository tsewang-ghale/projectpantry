<?php
session_start(); // Start the session to store order information

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitted"])) {
    // Sanitize form inputs
    $name = htmlspecialchars($_POST["name"]);
    $food_items = isset($_POST["food"]) ? array_map('htmlspecialchars', $_POST["food"]) : [];
    $toiletries = isset($_POST["toiletries"]) ? array_map('htmlspecialchars', $_POST["toiletries"]) : [];

    // Store order details in session for later use in the print page
    $_SESSION['order'] = [
        'name' => $name,
        'food_items' => $food_items,
        'toiletries' => $toiletries,
        'date_time' => date("Y-m-d H:i:s")
    ];

    // Store the order details in a text file for future reference
    $order_details = "Date and Time: " . $_SESSION['order']['date_time'] . "\nName: $name\nFood Items: " . implode(", ", $food_items) . "\nToiletries: " . implode(", ", $toiletries) . "\n\n";
    
    if (file_put_contents("orders.txt", $order_details, FILE_APPEND) === false) {
        echo "There was an error saving your order.";
        exit();
    }

    // Redirect to the print page after order submission
    header("Location: print_order.php");
    exit();
}
?>
