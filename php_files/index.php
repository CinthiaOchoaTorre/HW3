<?php
require "./order_functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bistro Order Form</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Build Your Bistro Order</h1>

<form action="process_order.php" method="POST">

    <label for="dessert">Dessert:</label>
    <select name="dessert" id="dessert">
        <option value="none">-- Select a dessert --</option>
        <option value="Cheesecake" <?= dessertSelected("Cheesecake"); ?>>Cheesecake</option>
        <option value="Chocolate Cake" <?= dessertSelected("Chocolate Cake"); ?>>Chocolate Cake</option>
        <option value="Carrot Cake" <?= dessertSelected("Carrot Cake"); ?>>Carrot Cake</option>
        <option value="Tiramisu" <?= dessertSelected("Tiramisu"); ?>>Tiramisu</option>
    </select>

    <br><br>

    <label for="drink">Drink:</label>
    <select name="drink" id="drink">
        <option value="none">-- Select a drink --</option>
        <option value="Coffee" <?= drinkSelected("Coffee"); ?>>Coffee</option>
        <option value="Hot Chocolate" <?= drinkSelected("Hot Chocolate"); ?>>Hot Chocolate</option>
        <option value="Root Beer" <?= drinkSelected("Root Beer"); ?>>Root Beer</option>
        <option value="Tea" <?= drinkSelected("Tea"); ?>>Tea</option>
        <option value="Milk" <?= drinkSelected("Milk"); ?>>Milk</option>
    </select>

    <br><br>

    <fieldset>
        <legend>Drink size:</legend>
        <label>
            <input type="radio" name="drinkSize" value="Small" <?= drinkSizeSelected("Small"); ?>>
            Small
        </label>
        <label>
            <input type="radio" name="drinkSize" value="Medium" <?= drinkSizeSelected("Medium"); ?>>
            Medium
        </label>
        <label>
            <input type="radio" name="drinkSize" value="Large" <?= drinkSizeSelected("Large"); ?>>
            Large
        </label>
    </fieldset>

    <br>

    <button type="submit">Submit Order</button>
</form>

<div class="insight-card">
    <h2>Live guidance</h2>
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
</div>

<p><a href="forget_order.php">Forget Order</a> | <a href="about.php">How It Works</a></p>

</body>
</html>