<!-- 3. A construction company needs to calculate the total cost of materials used for a recent project. If the project
required 300 bags of cement at $10 per bag and 1000 bricks at $0.50 per brick, how can PHP variables be used to
store this information, and how can concatenation be used to display the total cost of materials used? -->
<?php
$bags_of_cement_used = 300;
$cost_per_bag_of_cement = 10;
$total_cost_of_cement = $bags_of_cement_used * $cost_per_bag_of_cement;

$bricks_used = 1000;
$cost_per_brick = 0.5;
$total_cost_of_bricks = $bricks_used * $cost_per_brick;

$total_cost_of_materials = $total_cost_of_cement + $total_cost_of_bricks;

echo "Total cost of materials used: $" . $total_cost_of_materials;
?>
