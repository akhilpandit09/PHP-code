<?php
/*

PHP Loops
Often when you write code, you want the same block of code to run over and over again a certain number of times. So, instead of adding several almost equal code-lines in a script, we can use loops.

Loops are used to execute the same block of code again and again, as long as a certain condition is true.

In PHP, we have the following loop types:

while - loops through a block of code as long as the specified condition is true
do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array
*/

$x = 1;

while($x <= 5){
    echo "The number is : $x <br>";
    $x++;
}

echo("<br/>");

// do...while

$x = 1; //insteas of value of 1 is 6 then it will print atleast once 6

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);

echo("<br/>");
// foreach() => work only on array
$colors = array("red", "green", "blue", "yellow");
foreach($colors as $color){
    echo "$color <br/>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";

}


?>