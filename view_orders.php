<?php
// view_orders.php - Displays stored orders
$orders = file('orders.json', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Order Submissions</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Household Size</th>
                    <th>Items</th>
                    <th>Suggestions</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $order): ?>
                    <?php $data = json_decode($order, true); ?>
                    <tr>
                        <td><?= htmlspecialchars($data['name']) ?></td>
                        <td><?= htmlspecialchars($data['household']) ?></td>
                        <td><?= htmlspecialchars($data['items']) ?></td>
                        <td><?= htmlspecialchars($data['suggestions']) ?></td>
                        <td><?= htmlspecialchars($data['date']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
