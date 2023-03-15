<!-- 5. A gym wants to calculate the average weight lifted by members during a recent weightlifting competition. If there
were 10 participantsand their individual weights lifted were 200lbs, 225Ibs, 180Ibs, 190Ibs, 215Ibs, 210lbs, 195Ibs,
185lbs, 230lbs, and 240lbs, how can PHP variables be used to store this information, and how can concatenation be
used to display the average weight lifted by the participants? -->
<?php
$participant1 = 200;
$participant2 = 225;
$participant3 = 180;
$participant4 = 190;
$participant5 = 215;
$participant6 = 210;
$participant7 = 195;
$participant8 = 185;
$participant9 = 230;
$participant10 = 240;

$total_weight_lifted = $participant1 + $participant2 + $participant3 + $participant4 + $participant5 + $participant6 + $participant7 + $participant8 + $participant9 + $participant10;

$average_weight_lifted = $total_weight_lifted / 10;

echo "The average weight lifted by participants was: " . $average_weight_lifted . "Ibs";
?>
