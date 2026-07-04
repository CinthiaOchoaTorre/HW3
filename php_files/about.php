<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>How It Works</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>How This Bistro Order Flow Works</h1>

<p>
    This project uses PHP sessions to remember a user's dessert, drink, and drink
    size choices across multiple pages.
</p>

<ol>
    <li><strong>index.php</strong> displays the form. If session values already
        exist, the dropdowns and radio button are pre-selected using
        <code>dessertSelected()</code>, <code>drinkSelected()</code>, and
        <code>drinkSizeSelected()</code>.</li>
    <li><strong>process_order.php</strong> reads the submitted POST data,
        stores it in <code>$_SESSION</code>, applies the
        <code>(not selected)</code> fallback for missing fields, and prints
        the receipt.</li>
    <li><strong>forget_order.php</strong> clears the session with
        <code>session_unset()</code> and <code>session_destroy()</code>,
        returning the form to its default state.</li>
</ol>

<p>Current session values (for testing):</p>
<ul>
    <li>Dessert: <?= htmlspecialchars(sessionValue('dessert')); ?></li>
    <li>Drink: <?= htmlspecialchars(sessionValue('drink')); ?></li>
    <li>Drink size: <?= htmlspecialchars(sessionValue('drinkSize')); ?></li>
</ul>

<p><a href="index.php">Back to Order Form</a></p>

</body>
</html>