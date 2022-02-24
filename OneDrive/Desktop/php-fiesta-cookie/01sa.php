<!DOCTYPE html>
<html>
<body>
	<?php
$RJD = array(
		0 => array("id" = 1,"species" = Bulbasar,"type1" = Grass,"type2" = Poison,"ability" = Overgrow,"hp" = 45,"attack" = 49,"defense" = 49),
		0 => array("id" = 2,"species" = Ivysaur,"type1" = Grass,"type2" = Poison,"ability" = Overgrow,"hp" = 60,"attack" = 62,"defense" = 63),
		0 => array("id" = 3,"species" = Venusaur,"type1" = Grass,"type2" = Poison,"ability" = Overgrow,"hp" = 80,"attack" = 82,"defense" = 83),
		0 => array("id" = 4,"species" = Charmader,"type1" = Fire,"type2" = N/A,"ability" = Blaze,"hp" = 39,"attack" = 52,"defense" = 43),
		0 => array("id" = 5,"species" = Charmelon,"type1" = Fire,"type2" = N/A,"ability" = Blaze,"hp" = 58,"attack" = 64,"defense" = 58),
		0 => array("id" = 6,"species" = Charizard,"type1" = Fire,"type2" = Flying,"ability" = Blaze,"hp" = 78,"attack" = 84,"defense" = 78),
		0 => array("id" = 7,"species" = Squirtle,"type1" = Water,"type2" = N/A,"ability" = Torrent,"hp" = 44,"attack" = 48,"defense" = 65),
		0 => array("id" = 8,"species" = Wartotle,"type1" = Water,"type2" = N/A,"ability" = Torrent,"hp" = 59,"attack" = 63,"defense" = 80),
		0 => array("id" = 9,"species" = Blastoise,"type1" = Water,"type2" = N/A,"ability" = Torrent,"hp" = 79,"attack" = 83,"defense" = 100),
		0 => array("id" = 10,"species" = Caterpie,"type1" = Bug,"type2" = N/A,"ability" = Shield Dust,"hp" = 50,"attack" = 20,"defense" = 55)
	);
echo "<pre>";
echo "id/tspecies/ttype1/ttype2/tability/thp/tattack/tdefense";
array_map(function ($var){
	echo"\n", $var['id'],"\t\t",$var['hp'],"\t\t",$var['attack'],"\t\t",$var[defense];

},$RJD);
array_map(function($txt){
	echo "\n", $txt['species'],"\t\t",$txt['type1'],"\t\t",$txt['type2'],"\t\t",$txt['ability'];
},$RJD);
?>
</body>
</html>
