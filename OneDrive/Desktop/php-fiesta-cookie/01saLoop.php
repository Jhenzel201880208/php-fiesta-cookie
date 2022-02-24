<!DOCTYPE html>
<html>
<body>
	<?php
$RJD = array(
		array('1','Bulbasar','Grass','Poison','Overgrow','45','49','49'),
		array('2','Ivysaur','Grass','Poison','Overgrow','60','62','63'),
		array('3','Venusaur','Grass','Poison','Overgrow','80','82','83'),
		array('4','Charmader','Fire','N/A','Blaze','39','52','43'),
		array('5','Charmelon','Fire','N/A','Blaze','58','64','58'),
		array('6','Charizard','Fire','Flying','Blaze','78','84','78'),
		array('7','Squirtle','Water','N/A','Torrent','44','48','65'),
		array('8','Wartotle','Water','N/A','Torrent','59','63','80'),
		array('9','Blastoise','Water','N/A','Torrent','79','83','100'),
		array('10','Caterpie','Bug','N/A','Shield Dust','50','20','55')
	);
	echo '<table border ="1">';
	echo '<tr><th>id</th><th>species</th><th>type1</th><th>type2</th><th>ability</th><th>hp</th><th>attack</th><th>defense</th></tr>';
	foreach($RJD as $RJD)
	{
		echo'<tr>';
		foreach($RJD as $key)
		{
			echo'<td>'.$key.'</td>';
		}
		echo'</tr>';
	}
	echo '</table>';
?>
</body>
</html>