<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="fname"><br><br>
    <button type="submit">submit</button>
</form>

<?php

/*
PHP $_REQUEST is a PHP super global variable which is used to collect data after submitting an HTML form.
*/
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // collect value of input field
    $name = $_REQUEST['fname'];
    if(empty($name)){
        echo "Name is required !";
    }else{
        echo $name;
    }
}
?>
</body>
</html>