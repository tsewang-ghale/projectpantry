<?php
// Start session to check if employee is logged in
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Ordering System - Regional Food Bank of Oklahoma</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #fff;
            line-height: 1.6;
        }

        /* Top Banner */
        .top-banner {
            background-color: #D32F2F; /* Red color */
            color: white;
            text-align: center;
            padding: 15px 20px;
            font-size: 14px;
            font-weight: bold;
        }

        .top-banner-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .donate-btn {
            background-color: white;
            color: #D32F2F;
            border: none;
            padding: 8px 20px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
        }

        /* Header Navigation */
        .main-header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 15px 0;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            height: 70px;
        }

        .nav-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #D32F2F;
        }

        /* Main Content */
        .main-content {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
            text-align: center;
        }

        .page-title {
            color: #D32F2F;
            font-size: 32px;
            margin-bottom: 40px;
            font-weight: bold;
        }

        .section-title {
            color: #2C3E50;
            font-size: 24px;
            margin: 50px 0 20px;
            font-weight: bold;
        }

        .order-section {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 8px;
            margin-bottom: 40px;
        }

        .btn {
            background-color: #D32F2F; /* Red button */
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #B71C1C; /* Darker red on hover */
        }

        .employee-section {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
        }

        .employee-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .employee-btn {
            background-color: #2C3E50;
            color: white;
            border: none;
            padding: 12px 25px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }

        .employee-btn:hover {
            background-color: #1a252f;
        }

        .logout-btn {
            background-color: #7f8c8d;
        }

        .logout-btn:hover {
            background-color: #666;
        }

        /* Footer */
        .footer {
            background-color: #2C3E50;
            color: white;
            padding: 40px 20px;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .copyright {
            margin-top: 20px;
            font-size: 14px;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .top-banner-content {
                flex-direction: column;
                gap: 10px;
            }
            
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .employee-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn, .employee-btn {
                width: 100%;
                max-width: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Banner -->
    <div class="top-banner">
        <div class="top-banner-content">
            <span>MAKE YOUR YEAR-END GIFT BY MIDNIGHT ON DEC. 31 TO DOUBLE YOUR IMPACT!</span>
            <button class="donate-btn">DOUBLE MY IMPACT</button>
        </div>
    </div>

    <!-- Main Header with Navigation -->
    <header class="main-header">
        <div class="header-content">
            <img src="Logo.png" alt="Regional Food Bank Logo" class="logo">
            <nav>
                <ul class="nav-links">
                    <li><a href="#">GET HELP</a></li>
                    <li><a href="#">GIVE HELP</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">NEWS & EVENTS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <h1 class="page-title">Online Ordering System</h1>
        
        <!-- Order Section -->
        <div class="order-section">
            <h2 class="section-title">Place Your Food Pantry Order</h2>
            <p>Browse available items and submit your order online for convenient pickup.</p>
            <a href="orderpage.php">
                <button class="btn">Place Online Order</button>
            </a>
        </div>

        <!-- Employee Section -->
        <div class="employee-section">
            <h2 class="section-title">Employee Portal</h2>
            <p>Authorized staff can access order management tools below.</p>
            
            <?php if (!isset($_SESSION['employee_logged_in']) || $_SESSION['employee_logged_in'] !== true): ?>
                <div class="employee-buttons">
                    <a href="login.php" class="employee-btn">Employee Login</a>
                </div>
            <?php else: ?>
                <div class="employee-buttons">
                    <a href="view_orders.php" class="employee-btn">View Orders</a>
                    <a href="print_order.php" class="employee-btn">Print Orders</a>
                    <a href="logout.php" class="employee-btn logout-btn">Logout</a>
                </div>
            <?php endif; ?>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms of Use</a>
                <a href="#">Contact Us</a>
                <a href="#">Careers</a>
                <a href="#">Annual Reports</a>
            </div>
            <p class="copyright">
                © <?php echo date('Y'); ?> Regional Food Bank of Oklahoma<br>
                3355 S. Purdue, Oklahoma City, OK 73179 | (405) 972-1111
            </p>
        </div>
    </footer>
</body>
</html>
