<?php
// store.php - Handles form submissions securely
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    function sanitize($data) {
        return htmlspecialchars(stripslashes(trim($data)));
    }

    $name = sanitize($_POST['name'] ?? '');
    $household = sanitize($_POST['household'] ?? '');
    $items = isset($_POST['items']) ? array_map('sanitize', $_POST['items']) : [];
    $suggestions = sanitize($_POST['suggestions'] ?? '');

    if (!$name || !$household) {
        die("<p>Error: Missing required fields.</p><a href='index.html'>Go Back</a>");
    }

    // Store order in a file (or use a database)
    $orderData = [
        'name' => $name,
        'household' => $household,
        'items' => implode(", ", $items),
        'suggestions' => $suggestions,
        'date' => date('Y-m-d H:i:s')
    ];
    
    file_put_contents('orders.json', json_encode($orderData) . "\n", FILE_APPEND);

    // Redirect to thank you page
    header("Location: thankyou.html");
    exit;
}
?>
