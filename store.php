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

// Only process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values safely
    $name = $_POST["name"] ?? '';
    $household_size = $_POST["household_size"] ?? '';
    $food_items = isset($_POST["food"]) ? implode(", ", $_POST["food"]) : '';
    $toiletries = isset($_POST["toiletries"]) ? implode(", ", $_POST["toiletries"]) : '';

    // Insert into database
    $sql = "INSERT INTO orders (name, household_size, food_items, toiletries)
            VALUES ('$name', '$household_size', '$food_items', '$toiletries')";

    if ($conn->query($sql)) {
        header("Location: thankyou.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}

?>
