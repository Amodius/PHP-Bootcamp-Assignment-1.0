<!-- 1. A local coffee shop wants to keep track of the total revenue earned from coffee sales in a day. If the shop sold 120
cups of coffee at $2.50 each, how can PHP variables be used to store this information, and how can concatenation be
used to display the total revenue earned? -->

<?php
$cups_sold = 120;
$price_per_cup = 2.50;

$total_revenue = $cups_sold * $price_per_cup;

echo "Total revenue earned: $" . $total_revenue;
?>
