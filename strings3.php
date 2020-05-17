<?php
$pizza = "It's like there's pizza and life is good";

echo substr($pizza, 5, 4);
$find = "pizza";
$start= strpos($pizza, $find);
$end= strlen($find);

echo substr($pizza, $start,$end);
echo "Where $start and $end";

$name="David it's time to eat";
$name_length=strlen($name);
for($i=0;$i<$name_length;$i++){
	echo substr($name,$i,1);
	echo "<br/>";
	}

?>
