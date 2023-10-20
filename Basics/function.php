<?php
function writeMsg(){
    echo "I am from inside function";
}
writeMsg();
echo "<br/>";

function sum(int $x, int $y){
    $z =$x + $y;
    return $z;
}

echo sum(5,10);

?>