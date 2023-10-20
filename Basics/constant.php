<?php
//To create a constant, use the define() function.
/*
Syntax
define(name, value, case-insensitive)

*/
define('constant_name',"welcome to constant");
echo constant_name."<br/>";


define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0]."<br/>";

  //Constants are Global
//Constants are automatically global and can be used across the entire script.

define('GREETING', "welcome with greeting");
function sayHello(){
    echo GREETING;
}
sayHello();
?>