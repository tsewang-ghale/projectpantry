<?php
// store.php - Process the form submission and store data in a file or database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $household_size = htmlspecialchars($_POST['household_size']);
    $suggestions = htmlspecialchars($_POST['suggestions']);
    
    $food_selection = isset($_POST['food_selection']) ? implode(", ", $_POST['food_selection']) : "None";
    
    // Store data in a CSV file (can be replaced with a database insert)
    $file = fopen("orders.csv", "a");
    fputcsv($file, [$name, $household_size, $food_selection, $suggestions]);
    fclose($file);
    
    // Redirect to thank you page
    header("Location: thankyou.html");
    exit();
}
?>
