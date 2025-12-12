<?php
// Start session (if needed for consistency)
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us - Regional Food Bank of Oklahoma</title>
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

        /* Header with Logo Only */
        .header {
            background-color: #fff;
            border-bottom: 1px solid #eee;
            padding: 20px 0;
            text-align: center;
        }

        .logo {
            height: 80px;
            margin: 0 auto;
        }

        /* Main Content */
        .main-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        .page-title {
            color: #4CAF50; /* Green */
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
            font-weight: bold;
        }

        .section-title {
            color: #2C3E50;
            font-size: 28px;
            margin: 40px 0 20px;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 10px;
        }

        .content-text {
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 25px;
            color: #444;
        }

        .mission-box {
            background-color: #f0f8f0; /* Light green */
            padding: 30px;
            border-radius: 8px;
            margin: 30px 0;
            border-left: 5px solid #4CAF50;
        }

        .mission-title {
            color: #4CAF50;
            font-size: 24px;
            margin-bottom: 15px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-top: 30px;
        }

        .value-card {
            background-color: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            border-top: 4px solid #4CAF50;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .value-title {
            color: #4CAF50;
            font-size: 22px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .value-desc {
            color: #555;
            font-size: 16px;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            background-color: #2C3E50;
            color: white;
            padding: 40px;
            border-radius: 8px;
            margin: 40px 0;
        }

        .stat-item {
            text-align: center;
            padding: 20px;
            flex: 1;
            min-width: 200px;
        }

        .stat-number {
            font-size: 40px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 18px;
        }

        /* Back button */
        .back-btn {
            display: inline-block;
            margin-top: 40px;
            padding: 12px 30px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .back-btn:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background-color: #2C3E50;
            color: white;
            padding: 40px 20px;
            margin-top: 60px;
            text-align: center;
        }

        .copyright {
            margin-top: 20px;
            font-size: 14px;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-title {
                font-size: 28px;
            }
            
            .section-title {
                font-size: 24px;
            }
            
            .values-grid {
                grid-template-columns: 1fr;
            }
            
            .stats {
                flex-direction: column;
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Header with Logo Only -->
    <header class="header">
        <img src="Logo.png" alt="Regional Food Bank Logo" class="logo">
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <h1 class="page-title">Our Story – Mission, Vision and Core Values</h1>
        
        <p class="content-text">
            Since 1980, the Regional Food Bank has led the fight against hunger in central and western Oklahoma. 
            The Regional Food Bank is the state's largest domestic hunger-relief 501(c)(3) nonprofit that distributes 
            food through a network of community-based partners and schools. The majority of people served are 
            chronically hungry children, seniors living on fixed incomes and hardworking families struggling to 
            make ends meet. The Regional Food Bank is a member of Feeding America, the nation's network of more 
            than 200 food banks.
        </p>

        <div class="mission-box">
            <h2 class="mission-title">Our Mission</h2>
            <p class="content-text">
                Lead a network that provides nutritious food and pathways to self-sufficiency for people facing hunger.
            </p>
        </div>

        <div class="mission-box">
            <h2 class="mission-title">Vision Statement</h2>
            <p class="content-text">
                An Oklahoma where no one goes hungry.
            </p>
        </div>

        <h2 class="section-title">Core Values</h2>
        
        <div class="values-grid">
            <div class="value-card">
                <h3 class="value-title">HEART</h3>
                <p class="value-desc">
                    Approaching our mission with compassion, grit and commitment.
                </p>
            </div>
            
            <div class="value-card">
                <h3 class="value-title">EMPOWERMENT</h3>
                <p class="value-desc">
                    Advocating for equitable opportunities that elevate others.
                </p>
            </div>
            
            <div class="value-card">
                <h3 class="value-title">STEWARDSHIP</h3>
                <p class="value-desc">
                    Utilizing the resources entrusted to us responsibly and efficiently.
                </p>
            </div>
            
            <div class="value-card">
                <h3 class="value-title">COLLABORATION</h3>
                <p class="value-desc">
                    Prioritizing teamwork as we listen, support and compromise to achieve our mission.
                </p>
            </div>
        </div>

        <!-- Optional: Add some statistics -->
        <div class="stats">
            <div class="stat-item">
                <div class="stat-number">1980</div>
                <div class="stat-label">Year Founded</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">60+</div>
                <div class="stat-label">Counties Served</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">200+</div>
                <div class="stat-label">Community Partners</div>
            </div>
        </div>

        <!-- Back to Home button -->
        <a href="index.php" class="back-btn">Back to Home</a>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <p class="copyright">
            © <?php echo date('Y'); ?> Regional Food Bank of Oklahoma<br>
            3355 S. Purdue, Oklahoma City, OK 73179 | (405) 972-1111<br>
            <a href="#" style="color: #4CAF50;">info@regionalfoodbank.org</a>
        </p>
    </footer>
</body>
</html>
