<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $name = $_POST['name'] ?? 'Not provided';
    $household = $_POST['household'] ?? 'Not provided';
    $suggestions = $_POST['suggestions'] ?? 'None';

    // Fetch checkbox values
    $breakfast_items = isset($_POST['breakfast']) ? implode(", ", $_POST['breakfast']) : "None";
    $vegetables = isset($_POST['vegetables']) ? implode(", ", $_POST['vegetables']) : "None";
    $protein = isset($_POST['protein']) ? implode(", ", $_POST['protein']) : "None";
    $toiletries = isset($_POST['toiletries']) ? implode(", ", $_POST['toiletries']) : "None";
    $menstrual = isset($_POST['menstrual']) ? implode(", ", $_POST['menstrual']) : "None";

    // Store data in a file
    $file = fopen("orders.txt", "a");
    fwrite($file, "Name: $name\nHousehold: $household\nBreakfast Items: $breakfast_items\nVegetables: $vegetables\nProtein: $protein\nToiletries: $toiletries\nMenstrual Products: $menstrual\nSuggestions: $suggestions\n-----------------------\n");
    fclose($file);

    // Redirect to Thank You page
    header("Location: thankyou.html");
    exit();
}
?>
