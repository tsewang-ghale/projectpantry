<!-- view_orders.php -->
<?php
// Display stored orders
$file = fopen("orders.csv", "r");
if ($file !== FALSE) {
    echo "<table class='table table-bordered mt-4'><tr><th>Name</th><th>Household Size</th><th>Food Selection</th><th>Suggestions</th></tr>";
    while (($data = fgetcsv($file)) !== FALSE) {
        echo "<tr><td>{$data[0]}</td><td>{$data[1]}</td><td>{$data[2]}</td><td>{$data[3]}</td></tr>";
    }
    echo "</table>";
    fclose($file);
} else {
    echo "<p>No orders found.</p>";
}
?>
