<!DOCTYPE html>
<html>
<body>
	<head>
		<title>Pokemon Defense</title>
	</head>
	<?php
	$pokemon_defense = [
		['arrayname' => 'Bulbasaur', 'limit_number' => 49],
		['arrayname' => 'Ivysaur', 'limit_number' => 62],
		['arrayname' => 'Venusaur', 'limit_number' => 82],
		['arrayname' => 'Charmander', 'limit_number' => 52],
		['arrayname' => 'Charmeleon', 'limit_number' => 64],
		['arrayname' => 'Charizard', 'limit_number' => 84],
		['arrayname' => 'Squirtle', 'limit_number' => 48],
		['arrayname' => 'Wartortle', 'limit_number' => 63],
		['arrayname' => 'Blastoise', 'limit_number' => 83],
		['arrayname' => 'Caterpie', 'limit_number' => 20],
	];
	foreach($pokemon_defense as $pokedomdefense){
		if($pokedomdefense['limit_number'] > 60 || $pokedomdefense['limit_number'] < 30){
		echo $pokedomdefense['arrayname'].'<br />';
	}
}
?>
</body>
</html>