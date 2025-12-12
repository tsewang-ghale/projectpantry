<?php
// Connect to database
$conn = new mysqli("localhost", "YOUR_USERNAME", "YOUR_PASSWORD", "YOUR_DATABASE");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$name = $_POST['name'];
$household = $_POST['household_size'];

$food_items = isset($_POST['food']) ? implode(", ", $_POST['food']) : "";
$toiletry_items = isset($_POST['toiletries']) ? implode(", ", $_POST['toiletries']) : "";

// Insert into database
$sql = "INSERT INTO orders (name, household_size, food_items, toiletry_items)
        VALUES ('$name', '$household', '$food_items', '$toiletry_items')";

if ($conn->query($sql) === TRUE) {
    $order_id = $conn->insert_id; // Get the latest order ID
    
    // Redirect to thank you page with order ID
    header("Location: thankyou.php?order_id=$order_id");
    exit();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
