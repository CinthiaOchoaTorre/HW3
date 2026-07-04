<?php
require "./order_functions.php";
$orderSummary = order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Bistro Receipt</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Order Receipt</h1>

<div class="receipt-card"><?= $orderSummary; ?></div>

<div class="insight-card">
    <h2>Order feedback</h2>
    <p><?= htmlspecialchars(completionMessage()); ?></p>
    <p class="insight-note"><?= htmlspecialchars(pairingSuggestion()); ?></p>
</div>

<div class="insight-card pricing-grid">
    <div>
        <h2>Estimated total</h2>
        <p class="price-figure"><?= htmlspecialchars(formattedTotal()); ?></p>
    </div>
    <div>
        <h2>Order profile</h2>
        <p><?= htmlspecialchars(orderProfile()); ?></p>
    </div>
    <p class="insight-note full-width-note"><?= htmlspecialchars(pricingNote()); ?></p>
</div>

<p>
    <a href="index.php">Order Again</a> |
    <a href="forget_order.php">Forget Order</a>
</p>

</body>
</html>