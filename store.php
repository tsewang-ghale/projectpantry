<?php
// Database connection
$servername = "localhost";
$username = "tsewangg_pantryuser";
$password = "smd19Tse@2001";
$database = "tsewangg_projectpantry";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"] ?? '';
    $household_size = $_POST["household_size"] ?? '';
    $food_items = isset($_POST["food"]) ? implode(", ", $_POST["food"]) : '';
    $toiletries = isset($_POST["toiletries"]) ? implode(", ", $_POST["toiletries"]) : '';

    // Use prepared statement to prevent SQL injection
    $stmt = $conn->prepare("
        INSERT INTO orders (name, household_size, food_items, toiletries)
        VALUES (?, ?, ?, ?)
    ");
    $stmt->bind_param("ssss", $name, $household_size, $food_items, $toiletries);

    if ($stmt->execute()) {
        // Get the auto-generated order ID
        $order_id = $stmt->insert_id;

        // Redirect WITH the order ID
        header("Location: thankyou.php?order_id=" . $order_id);
        exit();
    } else {
        echo "Database error: " . $conn->error;
    }
}
?>
