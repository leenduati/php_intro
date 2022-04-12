
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
echo NAmE;

?>



