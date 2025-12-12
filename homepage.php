<?php
// Start session to check if employee is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #3498db; /* Green background */
            color: white;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            margin-bottom: 30px;
        }
        .btn {
            padding: 15px 30px;
            margin: 20px;
            background-color: #ffffff;
            color: #4CAF50;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #3498db;
            color: white;
        }
        .logo {
            width: 200px; /* Adjust size of the logo */
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <!-- Logo Section -->
    <img src="Logo.png" alt="Regional Food Bank Logo" class="logo">

    <h1>Welcome to the Online Ordering System for Regional Food Bank Of Oklahoma</h1>

    <!-- Button for online order -->
    <a href="orderpage.php">
        <button class="btn">Place Online Order</button>
    </a>

    <h2>Employee Section</h2>
    <!-- Employee Login Section -->
    <?php if (!isset($_SESSION['employee_logged_in']) || $_SESSION['employee_logged_in'] !== true): ?>
        <a href="login.php">
            <button class="btn">Employee Login</button>
        </a>
    <?php else: ?>
        <a href="view_orders.php">
            <button class="btn">View Orders</button>
        </a>
        <a href="print_order.php">
            <button class="btn">Print Orders</button>
        </a>
    <?php endif; ?>
</body>
</html>
