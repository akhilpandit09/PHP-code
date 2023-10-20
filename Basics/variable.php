<?php

$name = "Akhil";
$email = 'akhileshwarpandit0024@gmail.com';
echo "my name is {$name}<br/>";
echo "my email is {$email}<br/>";

$price = 45.55;
echo "Price is {$price}<br/>";

$employee = true;
echo "Employee hold boolean variable: {$employee}"

?>
<?php

//php variables scope
//There are three different variable scopes
/*
    PHP has three different variable scopes:

    1. local
    2. global
    3. static

    Global and Local Scope  
        => A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
        => A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
    
    */

// global scope
$x = 5; 

function myTest()
{
    global $x;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";  

?>

<?php
//Variable with local scope:


function myTest1() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest1();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";


?>

<?php 
/*
PHP The global Keyword
The global keyword is used to access a global variable from within a function.

To do this, use the global keyword before the variables (inside the function):


*/

$x = 5;
$y = 10;

function myTest2() {
  global $x, $y;
  $y = $x + $y;
}

myTest2();
echo $y; // outputs 15
?>

<?php
/*
PHP The static Keyword
Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes futher job
*/
function myTest4() {
    static $x = 0;
    echo $x;
    $x++;
  }
  echo "<br/><br/>";
  
  myTest4();
  echo "<br/>";
  myTest4();

  echo "<br/>";

  myTest4();
  

?>