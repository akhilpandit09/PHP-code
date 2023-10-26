<?php
/*
Use include when you want to include a file, and script continues even if the file is not found.

Use require when you want to include a file, and a fatal error is issued if the file is not found.

Choose between them based on whether the included file is essential for your script or not.

Keep in mind that there is also include_once and require_once which are similar to include and require, but they prevent the same file from being included multiple times to avoid redeclaration of functions and classes.

*/

// include 'demo.php';  //write filename
// include 'demos.php';  //wrong filename

// require 'demo.php';  //write filename
// require 'demos.php';  //wrong filename

echo("<br />");
echo("I am belong from include and require file");

?>