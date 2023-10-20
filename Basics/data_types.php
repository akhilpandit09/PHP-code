<?php
/*
PHP Data Types
Variables can store data of different types, and different data types can do different things.

PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource
*/

// string
$x = "Akhileshwar";
echo $x. "<br/>";
var_dump($x);

// float
$float = 5.34;
echo $float . "<br/>";
var_dump($float);
echo "<br/>";

// boolean
$bool = true;
echo $bool. "<br/>";
var_dump($bool);

echo "<br/>";
// Array
$arr = array("apple", "banana", "graphes");
print_r($arr);
echo "<br/>";
var_dump($arr);

echo "<br/>";
// object
class car {
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "My car is a". $this->color." ".$this->model. "!";
    }
}

$mycar = new car ("black", "volvo");
echo $mycar ->message()."<br/>";

// NULL value
// Null is a special data type which can have only one value: NULL.

//A variable of data type NULL is a variable that has no value assigned to it.

//Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

//Variables can also be emptied by setting the value to NULL:

echo "<br/>";
$nullExample = "Hello world!";
$nullExample = null;
var_dump($nullExample);


// PHP Resource
//The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.

?>