<?php
$apples= 'Fudge Fudge you noob!';
$take_out = 'fudge';
$apples_lower = strtolower($apples);
$newapples3=str_replace($take_out,'*****',$apples_lower);
echo $newapples3,"<br/>";


$take_out = 'Fudge';
echo $apples,"<br/>";
$newapples=substr_replace($apples, '*****',0,5);
echo $newapples,"<br/>";
$newapples2=str_replace($take_out,'*****',$apples);
echo $newapples2,"<br/>";
echo strtoupper($apples),"<br/>";
echo strtolower($apples),'<br/>';
?>
