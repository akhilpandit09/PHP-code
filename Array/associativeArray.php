<?php
/*
PHP Associative Arrays
Associative arrays are arrays that use named keys that you assign to them.

There are two ways to create an associative array: 

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
---------
or:
----------
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

*/
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $key=>$value){
    echo "Name:{$key} and age: {$value}";
    echo("<br/>");
}

?>