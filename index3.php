<!DOCTYPE html>

<html>
	<title>Some Maths</title>
<body>

<?php
// These are comments 
/* This is also a comment
+ add
* multiply
* 
*/
# This is a variable o

$b=3;

$x = 5; // global scope
$a=27;
$mul = $a*$b;
echo $mul;
echo "<br/>";

$mod = $a%$b;
echo "Modulus answer is $mod";
echo "<br/>";


if($a>$b && $a >0 && $b>0){
	echo "$a is bigger than $b";
	}else{
		echo "$b is bigger than $a";
		}

echo "<br/>";
	



# Print "Hello World" to the page
 echo "<b>Hello World </b><br/>";
 echo $x; // print the vaiable x to the sreen
 
# define a function that prints somehing to the screen
function writeMsg() {
    echo "Hello world!";
}

function familyName($fname, $year) {
    echo "$fname was born in  $year";
}
 
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
writeMsg(); // call the function
# echo is the preferred way to send something to the screen

echo "<p>Variable x outside function is: $x</p>";
echo "<p>Variable a outside function is: $a</p>";
familyName("Hartmann", 1961);
echo "<br/>";
?>

</body>
</html>
