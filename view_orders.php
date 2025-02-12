<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Submissions</title>
</head>
<body>
    <h2>Order Submissions</h2>
    <pre>
    <?php
        if (file_exists("orders.txt")) {
            echo nl2br(file_get_contents("orders.txt"));
        } else {
            echo "No orders submitted yet.";
        }
    ?>
    </pre>
</body>
</html>
