
<!-- This is outputing something to the screen! -->
<h3>
<?php
echo "Hello World"
 ?>
</h3>
<!-- You can also use print -->
<!-- comments in php -->

<!-- Referencing variables -->
<?php
// Comments inside php script
# Also comments
$output =  "This is Me";
echo $output;
echo "\r\n";
// Variable rules
/*
1. Must start with a dollar sign prefix
2. variables are are start-referenced by a letter or an underscore. Case sensitive
*/
// Data Types
/*
1. Strings with double quotes, numeric, float(decimals), arrays, objects, boolean, NULL Resource.
*/
$num1= 10;
$num2 = 30;
$num3 = $num1 +$num2;
echo $num3;

// Concatenate strings using dot in php
$string1 = "sasa";
$string2 = "msee";
$string3 = "awesome";
$greetings = $string1 . $string2;
echo $greetings;
$greetings2 = "$string1  $string2 $string3";
echo $greetings2;
//escape sequences
// use backlash \

// Constants in php
//use define

define("NAME", "leenduati", true);
//add true to make it case insensitive
echo NAME;

?>

<!-- Arrays -->
<!-- 1. Index Arrays -->

<p>

<?php

$people = array('Kevin', "Jeremy", "Sara", 23,444);
echo $people[3];

// Create arrays using the normal way
$cars = ["Honda", "Toyota", "Ford"];
# Add smth to array using
$cars[3] = "Benz";
// Add Element to end of arrays using empty indexing; eg.

$cars[] = "BMW";
echo $cars;

//how many elements in an array
echo count($cars);
//print whole array
print_r($cars);
#Check the data type in the array by calling var_dump
var_dump($cars)

?>

</p>

<!-- Associative Arrays; uses key value pairs -->
<p>

<?php
$students = array("form 3" => 43, "Jose" => 33, "Portilla" => 45);
echo $students["Jose"];
$students["lee"] = 26;
var_dump($students);

?>

</p>

<p>
    <!-- Multidimensional arrays; arrays within arrays -->
<?php
$body = array(
    array("Arms", "Hands"),
    array("Legs", "Knees"),
    array("Feet", "Toes")
);
echo $body[1][1];
?>
</p>
<!-- Loops -->






