<?php

$name = "Akhileshwar pandit";

// function printMe(){
//     global $name;
//     $name = "pandit";
//     echo "My name is ".$name."<br />";
// }
// printMe();
// echo "Hey $name";
// echo "$name";



//when we used function printMe and pass the argument and not even used global keyword to access the global variable inside the function then our local scope variable is also not set as globally 
function printMe($name){
    $name = "pandit";
    echo "My name is ".$name."<br />";
}
printMe($name);
echo($name);

?>