<?php
// extract will take the items from an associative area and extract them to variables 

$ice_cream = array('good'=>'vanilla', 'better'=>'cookies and cream', 'best'=>'chocolate');
extract($ice_cream);
$fruit = array("raspberries","apples","oranges","strawberies","plums");

$inventory = array('fruit1'=>"raspberries",'fruit5'=>"apples",'fruit4'=>"oranges",'fruit2'=>"strawberies",'fruit3'=>"plums");

// sort can be forward or reverse sort or rsort
rsort($fruit);
ksort($inventory);

foreach($fruit as $name){
	
	echo $name,"<br/>";
	
	}
echo "<br/>","<br/>","<br/>";
	
foreach($inventory as $key=> $obst){
	
	echo $key,' is the ', $obst,"<br/>";
	
	}	
	


echo "<br/>","<br/>","<br/>";
echo $good,"<br/>";
echo $better,"<br/>";
echo $best,"<br/>";
?>
