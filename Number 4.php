<!-- 4. A grocery store wants to calculate the total weight of apples sold in a week. If the store sold 200 pounds of apples
on Monday, 150 pounds on Wednesday, and 175 pounds on Friday, how can PHP variables be used to store this
information, and how can concatenation be used to display the total weight of apples sold in the week? -->
<?php
$monday_sales = 200;
$wednesday_sales = 150;
$friday_sales = 175;

$total_sales = $monday_sales + $wednesday_sales + $friday_sales;

echo "Total weight of apples sold this week: " . $total_sales . " pounds";
?>
