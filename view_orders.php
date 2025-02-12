<?php
echo "<h2>All Orders</h2>";
if (file_exists("orders.txt")) {
    echo nl2br(file_get_contents("orders.txt"));
} else {
    echo "No orders yet.";
}
?>
