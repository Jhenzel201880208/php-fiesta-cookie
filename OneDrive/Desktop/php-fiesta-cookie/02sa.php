<!DOCTYPE html>
<html>
<body>
<?php
	$hp_sum = array(45,60,80,39,58,78,44,59,79,50);
	print_r(array_sum($hp_sum));
?>
<?php
    $ave_attack = array(49,62,82,52,64,84,48,63,83,20);
    $average = array_sum($ave_attack) / count($ave_attack);
    echo $average;
?>
</body>
</html>