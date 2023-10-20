<?php
$x = 45;
$y = 65;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo($z);
?>