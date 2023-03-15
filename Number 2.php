<!-- 2. A clothing store wants to calculate the total profit from a recent sale. If the store sold 50 dresses at a cost of $25
each and sold them for $50 each, how can PHP variablesbe used to store this information, and how can
concatenation be used to display the total profit earned? -->
<?php
$dresses_sold = 50;
$cost_price_per_dress = 25;
$selling_price_per_dress = 50;

$total_cost = $dresses_sold * $cost_price_per_dress;
$total_revenue = $dresses_sold * $selling_price_per_dress;
$total_profit = $total_revenue - $total_cost;

echo "Total profit earned: $" . $total_profit;
?>
